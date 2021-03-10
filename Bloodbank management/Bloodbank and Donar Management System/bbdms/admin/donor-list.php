<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>BBDMS | Donor List  </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<?php include('includes/header.php');?>
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<!-- Zero Configuration Table -->
						<div class="panel panel-default mt-5">
							<div class="panel-body mt-5">
						
								<table  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
								
											<th>FullName</th>
											<th>Username</th>
											<th>ContactNo</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Blood Group</th>
	
										</tr>
									</thead>
									<tbody>
									<?php
									// session_start();
									// error_reporting(0);
                        $conn = mysqli_connect("localhost","root","","bbdms");
                        if($conn)
                        {
                            $sql = "SELECT * FROM  donated";
                            $result = mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_assoc($result))
                            {
								echo '<tr>
								<td>'.$row["FullName"].'</td>
								<td>'.$row["username"].'</td>
								<td>'.$row["MobileNumber"].'</td>
								<td>'.$row["Age"].'</td>
								<td>'.$row["Gender"].'</td>
								<td>'.$row["BloodGroup"].'</td>
		
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

</body>
</html>
<?php
//  } 
 ?>