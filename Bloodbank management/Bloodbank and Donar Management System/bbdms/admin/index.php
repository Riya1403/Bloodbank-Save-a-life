<?php
session_start();
include('includes/config.php');
	 if($_SERVER['REQUEST_METHOD']=="POST")
	 {
         $uname=$_POST['uname'];
         $pwd = $_POST['pwd'];
         $conn = mysqli_connect("localhost","root","","bbdms");
		 if($conn)
		 {		
             $sql = "SELECT * from admin1 where ausername = '$uname'";
             $result = mysqli_query($conn,$sql);
             $num = mysqli_num_rows($result);
			 if($num>0)
			 {
				while($row = mysqli_fetch_assoc($result))
				{
				   if($pwd==$row['apassword'])
				   {
					   echo"<script>
					   alert ('Logged in!'); window.location.href = 'dashboard.php';</script>";
					    $_SESSION['auname'] = $uname;
					    //echo "Welcome " . $_SESSION['auname'];
				   }
				   else{
					   echo"<script>
					   alert ('Invalid Credentials.');</script>";
				   }
				}
             }
             else{
                 echo "Account not found!";
			 }
		}
       else{
           echo mysqli_connect_err($conn);
       }
}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SAVE A LIFE | Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
    .navbar-toggler 
    {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>
</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(img/banner.png);">
		<div class="form-content ">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">SAVE A LIFE | ADMIN LOGIN</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							<form name="donar" method="POST" action="index.php">
            <!-- username field -->
            <div class="row">
            <div class="col-lg-12">
            <div class="font-italic">USERNAME<span style="color:red">*</span></div>
            <input type="text" placeholder="Username" name="uname" class="form-control mb">
            </div>
            </div>
            <!-- password field -->
            <div class="row">
            <div class="col-lg-12">
            <div class="font-italic">PASSWORD<span style="color:red">*</span></div>
            <input type="password" placeholder="Password" name="pwd" class="form-control mb">
            </div>
            </div>

            <!-- submit button -->
            <div class="row">
            <div class="col-lg-4">
            <div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
            </div>
            </div>

</form> 
</div>
</body>

</html>