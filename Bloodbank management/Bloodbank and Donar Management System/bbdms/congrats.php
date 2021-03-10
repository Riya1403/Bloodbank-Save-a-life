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
    <style>
            .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap{
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
    </style>


</head>

<body>
<?php include('includes/header.php');?>
<br>
<div class="text-center my-2">
	  <div class="card">
		<div class="card-body text-center">
          <h4 class="card-title mt-3">Congraulations!</h4>
          <h6 class="card-text">You are eligible for donation</h6>
          <p class="card-text">Please select your donation date here.</p>
        <form action="donated.php" method="POST">
          <?php
            $tom=date("d")+1;
            if($tom<9){
                $tom = '0'.$tom;
            }
            $tomm = date("Y-m")."-".$tom."";
            $max=date("d")+7;
            if($max<9){
                $max = '0'.$max;
            }
            $maxx = date("Y-m")."-".$max."";
            echo "<input type='date' name = 'dondate' min='$tomm' max='$maxx' required>";
          ?>
          <button class="btn btn-primary mb-3 ml-3">Confirm</button>
        </form>
		</div>
    
</div><br><br><br><br><br>
<div class="container-fluid">
<?php include('includes/footer.php');?>
</div>
    <!-- Bootstrap core JavaScript -->

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>