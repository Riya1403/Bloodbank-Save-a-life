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
	
	<title>BBDMS |Admin Manage Blood groups</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row mt-5 mr-5">
					<div class="col-md-12 ">
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-body" style="align-content:center;">
							
								<table  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
												<th>Blood Groups</th>
												<th>Amount</th>
										
										
											
										</tr>
									</thead>
									
									<tbody>
									<?php
										session_start();
										error_reporting(0);
										$conn = mysqli_connect("localhost","root","","bbdms");
										if($conn)
										{
											$sql = "SELECT * FROM  tblbloodgroup";
											$result = mysqli_query($conn,$sql);
										
											while($row = mysqli_fetch_assoc($result))
											{
												echo '<tr>
												<td>'.$row["BloodGroup"].'</td>
												<td>'.$row["Amount"].'</td>		
											</tr>';
											}
										}else{
											echo mysqli_connect_error($conn);
										}
								
									?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
<?php 
// } 
?>