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

    <title>BloodBank & Donor Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href="css/modern-business.css" rel="stylesheet">
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

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
<div class="container">

<a href="eligible.php" ><h1 class="my-4 text-center">CHECK ELIGIBILITY TO DONATE>></h1></a><br>
          <!-- Compatible Blood Types-->

<!-- --------------------------------new row-------------------------------- -->
<div class="row">
    <div class='col-sm-6'>
        <table class="table table-responsive " >
        <tbody>
        <tr style="border: 3px solid black">
        <th class="text-center" colspan="3" style="color:white;background-color:red; border: 1px solid black;">Compatible Blood Type Donors</th>
        </tr>
        <tr>
        <td style="border: 2px solid black"><b>Blood Type</b></td>
        <td style="border: 2px solid black"><b>Donate Blood To</b></td>
        <td style="border: 2px solid black"><b>Receive Blood From</b></td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>A+</b></span></td>
        <td style="border: 2px solid black">A+ AB+</td>
        <td style="border: 2px solid black">A+ A- O+ O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>O+</b></span></td>
        <td style="border: 2px solid black">O+ A+ B+ AB+</td>
        <td style="border: 2px solid black">O+ O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>B+</b></span></td>
        <td style="border: 2px solid black">B+ AB+</td>
        <td style="border: 2px solid black">B+ B- O+ O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>AB+</b></span></td>
        <td style="border: 2px solid black">AB+</td>
        <td style="border: 2px solid black">Everyone</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>A-</b></span></td>
        <td style="border: 2px solid black">A+ A- AB+ AB-</td>
        <td style="border: 2px solid black">A- O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>O-</b></span></td>
        <td style="border: 2px solid black">Everyone</td>
        <td style="border: 2px solid black">O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>B-</b></span></td>
        <td style="border: 2px solid black">B+ B- AB+ AB-</td>
        <td style="border: 2px solid black">B- O-</td>
        </tr>
        <tr>
        <td style="border: 2px solid black"><span style="color: #961e1b;"><b>AB-</b></span></td>
        <td style="border: 2px solid black">AB+ AB-</td>
        <td style="border: 2px solid black">AB- A- B- O-</td>
        </tr>
        </tbody>
        </table>
    </div>


    <div class="col-sm-6 need">

        <h1 style="color:red;"><u>Current Critical Needs</u>:</h1>
        <?php
        $conn = mysqli_connect("localhost","root","","bbdms");
        $sql = "Select BloodGroup from tblbloodgroup where Amount = (select min(Amount) from tblbloodgroup)";
        $res = mysqli_query($conn,$sql);
        echo "<ul>";
        while($row = mysqli_fetch_assoc($res)){
        if($res){
          echo "<li><h2>".$row['BloodGroup']."</h2></li><br>
                ";
        }
        else{
          echo "Bloodgroup not found";
        }
      }
      echo "</ul><br>";
        ?>
        <div class="btn btn-lg btn-danger m-4 donate-button" style="background-color:red; cursor:pointer; box-shadow: 5px 10px 18px rgb(200, 10, 33);" onclick="document.location='eligible.php'">Save a life <br>Donate Blood!</div>
    </div>
</div>


<!-- ------------------------new row------------------------------------ -->
<div class="row">
	<div class="col-md-6 col-sm-12 my-3">
    
	  <div class="card">
		<div class="card-body card-style text-center">
		  <h5 class="card-title mt-3">Away from us?</h5>
		  <p class="card-text">Find blood banks near you >></p>
		  <a href="http://nbtc.naco.gov.in/bloodBank/findblood" target="_blank" class="btn btn-danger mb-3 ml-3" style="background-color:red;">Visit Now</a>
		</div>
	  </div>
	</div>

	<div class="col-md-6 col-sm-12 my-3">
	  <div class="card">
		<div class="card-body card-style text-center">
		  <h5 class="card-title mt-3">Who is eligible?</h5>
		  <p class="card-text">Read this if you want to know if you can give blood >></p>
		  <a href="https://www.who.int/campaigns/world-blood-donor-day/2018/who-can-give-blood" target="_blank" class="btn btn-danger mb-3 ml-3" style="background-color:red;">Visit Now</a>
		</div>
	  </div>
	</div>
    </div>

    <div class="row">
	<div class="col-md-6 col-sm-12 my-3">
		<div class="card">
		  <div class="card-body card-style text-center">
			<h5 class="card-title mt-3">Donate Now</h5>
			<p class="card-text">Donation camps being held across the nation >></p>
			<a href="https://www.eraktkosh.in/BLDAHIMS/bloodbank/campSchedule.cnt" target="_blank" class="btn btn-danger mb-3 ml-3" style="background-color:red;">Visit Now</a>
		  </div>
		</div>
	  </div>

	  <br>
	  <div class="col-md-6 col-sm-12 my-3">
		<div class="card">
		  <div class="card-body card-style text-center">
			<h5 class="card-title mt-3">Need blood?</h5>
			<p class="card-text">Check for the availability of blood in your region  >></p>
			<a href="https://www.eraktkosh.in/BLDAHIMS/bloodbank/stockAvailability.cnt" class="btn btn-danger mb-3 ml-3" target="_blank" style="background-color:red;">Visit Now</a>
		  </div>
		</div>
	  </div>
  </div>
  </div>




       
    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>