<?php
error_reporting(0);
include('includes/config.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $fullname=$_POST['fullname'];
    $mobile=$_POST['mobileno'];
    $email=$_POST['emailid'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $blodgroup=$_POST['bloodgroup'];
    $add1=$_POST['add1'];
    $add2=$_POST['add2'];
    $add3=$_POST['add3'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];

        

    if($pwd==$cpwd)
    {

        $conn = mysqli_connect("localhost","root","","bbdms");
        if($conn)
        {
            $checksql = "SELECT username from tblblooddonars where username = '$uname'";
                $ans = mysqli_query($conn,$checksql);
                $num = mysqli_num_rows($ans);
                if($num>0){
                    echo"<script>
                                    alert ('Username already exist!');</script>";
                }
                else{
            // $hash = password_hash($pwd, PASSWORD_DEFAULT);
            //echo $blodgroup;
            if($fullname && $email &&  $age  && $gender!="" && $blodgroup!="" && strlen($mobile)==10 && $add1 && $add2 && $add3 && $pwd && $uname && $cpwd){
               // echo $gender;
            $sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,ADD1,ADD2,ADD3,username,password1,cpassword) VALUES('$fullname',$mobile,'$email',$age,'$gender','$blodgroup','$add1','$add2','$add3','$uname','$pwd','$pwd')";
           
            $result = mysqli_query($conn,$sql);
                            if($result){
                                echo "<script>
                                alert('Registeration Sucessful!');
                                window.location.href = 'login.php';
                                </script>";
                            }else{
                                    echo"<script>
                                    alert ('Account was not created.Please Try again!');</script>";
                                } 
                             }
                            else{
                                echo"<script>
                                    alert ('Please fill out all the fields!');</script>";
                            } 
                            }
            //echo "Inserted";
                        
        }
        else
        {
        echo mysqli_connect_error($conn);
        }
    }
    else
    {
        echo"<script>alert('Password mismatch!')</script>";
    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Become A Donar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">REGISTER</h1>

        <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Become a Donor</li>
        </ol> -->
         
        <!-- Content Row -->

        <form name="donar" method="POST" action="become-donar.php">
<div class="row">
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Full Name</div>
    <div><input type="text" name="fullname" class="form-control">
    </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Mobile Number</div>
    <div><input type="text" name="mobileno" class="form-control"></div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Email Id</div>
    <div><input type="email" name="emailid" class="form-control"></div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Age</div>
    <div><input type="text" name="age" class="form-control"></div>
    </div>


    <div class="col-lg-4 mb-4">
    <div class="font-italic">Gender</div>
    <div><select name="gender" class="form-control">
    <option value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    </div>
    </div>

    <div class="col-lg-4 mb-4">
    <div class="font-italic">Blood Group</div>
    <div><select name="bloodgroup" class="form-control">
    <option value="">Select</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Room no.,Building name</div>
    <div><textarea class="form-control" name="add1"></textarea></div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Street name,City</div>
    <div><textarea class="form-control" name="add2"></textarea></div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="font-italic">Pincode</div>
    <div><textarea class="form-control" name="add3"></textarea></div>
    </div>
</div>

<div class="row">
        <div class="col-lg-4 mb-4">
        <div class="font-italic">Set username</div>
        <div><input type="text" name="uname" class="form-control"></div>
        </div>

        <div class="col-lg-4 mb-4">
        <div class="font-italic">Password</div>
        <div><input type="password" name="pwd" class="form-control"></div>
        </div>

        <div class="col-lg-4 mb-4">
        <div class="font-italic">Confirm password</div>
        <div><input type="password" name="cpwd" class="form-control" ></div>
        </div>
</div>

<div class="row">
    <div class="col-lg-4">
    <button class="btn btn-success btn-lg mb-4 float-right" type="submit" >Submit</button>
    </div>
    <div class="col-lg-4">
    <h5 class="float-right">If already registered,login--></h5>
    </div>
   <div class="col-lg-4">
   <a href="login.php" class="btn btn-primary btn-lg mb-4 float-left" role="button"> Login </a>
    </div>
    
</div>
        
        








        <!-- /.row -->
</form>   
        <!-- /.row -->
</div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

</body>

</html>