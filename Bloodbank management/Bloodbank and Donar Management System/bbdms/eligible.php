<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Save a life</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
        .navbar-toggler {
            z-index: 1;
        }
        
        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>


</head>

<body>

<?php include('includes/header.php');?>
<?php
        session_start();
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $uname = $_POST['uname'];
            $gender = $_POST['gender'];
            $hb = $_POST['hb'];
            $wt = $_POST['wt'];
            $age = $_POST['age'];
            $date = $_POST['date'];
            $answer = $_POST['ans'];  
            if($gender == "Male" && $hb>=13 || $gender == "Female" && $hb>=12.5){
                $eli = TRUE;
            }
            else{
                $eli = FALSE;
            }
            $conn = mysqli_connect("localhost","root","","bbdms");
            if($conn){		
                $checksql = "SELECT * from tblblooddonars where username = '$uname'";
                $ans = mysqli_query($conn,$checksql);
                //echo $ans;
                $num = mysqli_num_rows($ans);
                $todayDate = time();
                $date_3_months = strtotime("-3 months");
                $givenDate = strtotime($date);
                if($num>0){
                    if($wt>=50  && $eli && $givenDate < $todayDate && $givenDate <= $date_3_months && $age >= 18 &&
                        $answer == "ans2"){
                        while($row = mysqli_fetch_assoc($ans))
                        {
                        $_SESSION['fullname'] = $row['FullName'];
                        $_SESSION['mobileno'] = $row['MobileNumber'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['gender'] = $row['Gender'];
                        $_SESSION['bloodgroup'] = $row['BloodGroup'];
                        echo "<script>
                        window.location.href = 'congrats.php';
                        </script>";	
     }    
    }         
     else{
         echo "<script>alert('You are not eligible');</script>";
     } 
                }
                else{
                    echo "<script>alert('Account not found, Please register first!');</script>";
                }
            }
            else{
                echo mysqli_connect_error($conn);
            }
        }
    ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">ELIGIBILITY FORM</h1>
        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="eligibility" method="POST" action="eligible.php">
            <div class="row">
                <div class="col mb-4">
                <div class="font-italic">Username<span style="color:red">*</span></div>
                <div><input type="text" name="uname" class="form-control" required></div>
                </div>
                <div class="col mb-4">
                <div class="font-italic">Password<span style="color:red">*</span></div>
                <div><input type="password" name="pwd" class="form-control" required></div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                <div class="font-italic">Age<span style="color:red">*</span></div>
                <div><input type="text" name="age" class="form-control" required></div>
                </div>
                <div class="col mb-4">
                <div class="font-italic">Weight<span style="color:red">*</span></div>
                <div><input type="text" name="wt" class="form-control" required></div>
                </div>
                
            </div>
            <div class="row">
            <div class="col mb-4">
                <div class="font-italic">Gender<span style="color:red">*</span></div>
                <div><select name="gender" class="form-control" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="font-italic">Haemoglobin<span style="color:red">*</span></div>
                    <div><input type="text" name="hb" class="form-control" required></div>
                </div>
            </div>
            <div class="row">
                
            <div class="col-lg-6 mb-4">
                    <div class="font-italic">Last donation date:<span style="color:red">*</span></div>
                    <input type="date" name="date">
            </div>
            </div>
            <div class="row">
                <p><div class="font-italic">Facing any of the conditions given below?<span style="color:red">*</span></div></p>
                <div>
                    <ul>
                        <li>Pregnancy</li>
                        <li>Acute fever</li>
                        <li>Recent alcoholic intake</li>
                        <li>Recent body piercing/tattooing</li>
                        <li>Surgery</li>
                        <li>Cancer</li>
                        <li>Cardiac arrest</li>
                        <li>Taking any of the medications: aspirin, antibiotics, anti-hypertensive, steroids, hormones, anticoagulants, on inhalers</li>
                        <li>A diabetic patient on insulin</li>
                    </ul>
                </div>
                
            </div>
            YES <input type="radio" name="ans" value="ans1" />
            NO <input type="radio" name="ans" value="ans2"  />
            <div class="row">
                <div class="col-lg-4 mb-4">
                <div class="float-right"><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
            </div>
        </form>
        
        </div>        
    </div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>