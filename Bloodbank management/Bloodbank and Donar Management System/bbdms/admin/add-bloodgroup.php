<?php
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>BBDMS | Admin add-bloodgroup</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  

</head>

<body>

<?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="donar" method="POST" action="add-bloodgroup.php">
            <!-- username field -->
            <div class="row mt-5">
            <div class="col-lg-12 mt-5">
            <div class="font-italic">Blood group<span style="color:red">*</span></div>
            <div><input type="text" name="bgp" class="form-control" required></div>
            </div>
            </div>
            <!-- password field -->
            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Amount<span style="color:red">*</span></div>
            <div><input type="nunmber" name="amt" class="form-control" required></div>
            </div>
            </div>

    <!-- Add or subtract amount -->
    <div><h6>Select the updation method</h6>
    <input type="radio" id="add" name="update" value="add">
    <label for="add">ADDITION</label><br>
    <input type="radio" id="sub" name="update" value="sub">
    <label for="sub">SUBTRACT</label><br></div>

    <?php
                    session_start();
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $bgp = $_POST['bgp'];
                        $amt = $_POST['amt'];
                        $update = $_POST['update'];
                        //echo $update;
                        // $hash = password_hash($pwd, PASSWORD_DEFAULT);
                        $conn = mysqli_connect("localhost","root","","bbdms");
                        if($conn)
                        {
                            $sql = "SELECT * FROM  tblbloodgroup WHERE BloodGroup = '$bgp'";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);

                            if($update == "add")
                                {
                                    if($num>0)
                                    {
                                            
                                            // -----------------new blood group--------------------
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                //  echo $row['Amount'];
                                                    $add=$row['Amount']+$amt;
                                                //echo $add;
                                                //  echo $row['BloodGroup'];
                                                    $check="UPDATE tblbloodgroup SET Amount=$add WHERE BloodGroup='$bgp'";
                                                    $ans=mysqli_query($conn,$check);
                                                    if($ans)
                                                    {
                                                        echo "<script>alert('Amount updated');</script>";
                                                    }
                                                    else
                                                    {
                                                    echo "<script>alert('Failed');</script>";
        
                                                    }
        
                                                }
                                    }
                                    else
                                    {
                                        $checkk="INSERT INTO tblbloodgroup(BloodGroup,Amount) VALUES('$bgp',$amt)";
                                        $anss=mysqli_query($conn,$checkk);  
                                        if($anss)
                                                    {
                                                        echo "<script>alert('Blood group inserted!');</script>";
                                                    }
                                                    else
                                                    {
                                                    echo "<script>alert('Insertion failed!');</script>";
        
                                                    }
            
                                    } 
                                }
                            else{
                                if($update == "sub"){
                                    if($num>0)
                                    {
                                            
                                            // -----------------new blood group--------------------
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                //  echo $row['Amount'];
                                                    $sub=$row['Amount']-$amt;
                                                //  echo $add;
                                                //  echo $row['BloodGroup'];
                                                    $check="UPDATE tblbloodgroup SET Amount=$sub WHERE BloodGroup='$bgp'";
                                                    $ans=mysqli_query($conn,$check);
                                                    if($ans)
                                                    {
                                                        echo "<script>alert('Amount updated'); window.location.href = 'dashboard.php';</script>";
                                                    }
                                                    else
                                                    {
                                                    echo "<script>alert('Failed');</script>";
        
                                                    }
        
                                                }
                                    }
                                }
                                
                            }

                            
							
                        }else{
                            echo mysqli_connect_error($conn);
                        }
                    }
                
                ?>

            <!-- submit button -->
            <div class="row">
            <div class="col-lg-4 mb-4">
            <div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
            </div>
            </div>

</form> 
</div>
</body>

</html>