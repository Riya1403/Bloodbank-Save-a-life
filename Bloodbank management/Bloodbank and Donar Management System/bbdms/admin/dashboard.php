<?php
session_start();
error_reporting(0);
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>BBDMS | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

    </style> -->
</head>

<body>
<?php include('includes/header.php');?>
	<div class="container">
	<div class="row mt-5">
	<div class="col-md-3 col-sm-12  my-3">
    
	  <div class="card mt-5">
		<div class="card-body card-style text-center">
		  <h5 class="card-title mt-3">LISTED BLOOD GROUPS</h5>
		  <div class="btn btn-lg btn-danger m-4 donate-button" style="background-color:red; cursor:pointer; box-shadow: 5px 10px 18px rgb(200, 10, 33);" onclick="document.location='manage-bloodgroup.php'">View details >></div>
		</div>
	  </div>
	</div>

	<div class="col-md-3 col-sm-12  my-3">
	  <div class="card mt-5">
		<div class="card-body card-style text-center">
		  <h5 class="card-title mt-3">DONOR LIST</h5>
		  <div class="btn btn-lg btn-danger m-4 donate-button" style="background-color:red; cursor:pointer; box-shadow: 5px 10px 18px rgb(200, 10, 33);" onclick="document.location='donor-list.php'">View details >></div>
		</div>
	  </div>
	</div>
   
	<div class="col-md-3 col-sm-12  my-3">
		<div class="card  mt-5">
		  <div class="card-body card-style text-center">
			<h5 class="card-title mt-3">USER QUERIES</h5>
			<div class="btn btn-lg btn-danger m-4 donate-button" style="background-color:red; cursor:pointer; box-shadow: 5px 10px 18px rgb(200, 10, 33);" onclick="document.location='manage-conactusquery.php'">View details >></div>
		  </div>
		</div>
	  </div>

	  <br>
	  <div class="col-md-3 col-sm-12  my-3">
		<div class="card  mt-5">
		  <div class="card-body card-style text-center">
			<h5 class="card-title mt-3">UPDATE BLOOD GROUPS</h5>
			<div class="btn btn-lg btn-danger m-4 donate-button" style="background-color:red; cursor:pointer; box-shadow: 5px 10px 18px rgb(200, 10, 33);" onclick="document.location='add-bloodgroup.php'">View details >></div>
		  </div>
		</div>
	  </div>
  </div>
  </div>
  </div>

	

</body>
</html>
<?php
//  }
  ?>