<?php
session_start();
error_reporting(0);
include('includes/config.php');
// if(strlen($_SESSION['alogin'])==0)
// 	{	
// header('location:index.php');
// }
// else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=1;
$sql = "UPDATE tblcontactusquery SET status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Testimonial Successfully Inacrive";
}

if(isset($_REQUEST['del']))
	{
$did=intval($_GET['del']);
$sql = "delete from tblcontactusquery WHERE  id=:did";
$query = $dbh->prepare($sql);
$query-> bindParam(':did',$did, PDO::PARAM_STR);
$query -> execute();

$msg="Record deleted Successfully ";
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
	<meta name="theme-color" content="#3e454c">
	
	<title>BBDMS |Admin Manage Queries   </title>

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
		
		
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Contact Us Queries</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-body">
							
								<table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Contact No</th>
											<th>Message</th>
											<th>Posting date</th>
											<!-- <th>Action</th> -->
										</tr>
									</thead>
									
									<tbody>

									<?php
									session_start();
									error_reporting(0);
                        $conn = mysqli_connect("localhost","root","","bbdms");
                        if($conn)
                        {
                            $sql = "SELECT * FROM  tblcontactusquery";
                            $result = mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_assoc($result))
                            {
								echo '<tr>
								<td>'.$row["username"].'</td>
								<td>'.$row["EmailId"].'</td>
								<td>'.$row["ContactNumber"].'</td>
								<td>'.$row["Message"].'</td>
								<td>'.$row["PostingDate"].'</td>		
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
//  } 
 ?>