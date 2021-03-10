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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">FEEDBACK</h1>

        
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="feedback" method="POST" action="feedback.php">
            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">How much of an impact do you think your donation makes?<span style="color:red">*</span></div>
            <!-- <div><input type="text" name="uname" class="form-control" required></div> -->
            <div>
              <input type="radio" id="great" name="Q1" value="great">
              <label for="great">A great deal</label><br>
              <input type="radio" id="lot" name="Q1" value="lot">
              <label for="lot">A lot</label><br>
              <input type="radio" id="moderate" name="Q1" value="moderate">
              <label for="moderate">A moderate Amount</label><br>
              <input type="radio" id="little" name="Q1" value="little">
              <label for="little">A little</label><br>
              <input type="radio" id="none" name="Q1" value="none">
              <label for="none">None at All</label><br>
            </div>
            <br>

            <div class="font-italic">How easy or difficult was the process of donation to our organization?<span style="color:red">*</span></div>
            <!-- <div><input type="text" name="uname" class="form-control" required></div> -->
            <div>
              <input type="radio" id="veasy" name="Q2" value="veasy">
              <label for="veasy">Very Easy</label><br>
              <input type="radio" id="easy" name="Q2" value="easy">
              <label for="easy">Easy</label><br>
              <input type="radio" id="moderate" name="Q2" value="moderate">
              <label for="moderate">Moderate Amount</label><br>
              <input type="radio" id="difficult" name="Q2" value="difficult">
              <label for="difficult">Difficult</label><br>
              <input type="radio" id="vdifficult" name="Q2" value="vdifficult">
              <label for="vdifficult">Very Difficult</label><br>
            </div>
            <br>

            <div class="font-italic">How well our organization explain how your donation will be spent?<span style="color:red">*</span></div>
            <!-- <div><input type="text" name="uname" class="form-control" required></div> -->
            <div>
              <input type="radio" id="exwell" name="Q3" value="exwell">
              <label for="exwell">Extremely Well</label><br>
              <input type="radio" id="vwell" name="Q3" value="vwell">
              <label for="vwell">Very Well</label><br>
              <input type="radio" id="modwell" name="Q3" value="modwell">
              <label for="modwell">Moderately Well</label><br>
              <input type="radio" id="nwell" name="Q3" value="nwell">
              <label for="nwell">Not so well</label><br>
              <input type="radio" id="nawell" name="Q3" value="nawell">
              <label for="nawell">None at All Well</label><br>
            </div>
            <br>
            <div class="font-italic">Review / Suggestion</div>
            <textarea name="review" rows="10" cols="30"></textarea>



            </div>
            </div>
            
            <?php
                    session_start();
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $q1 = $_POST['Q1'];
                        $q2 = $_POST['Q2'];
                        $q3 = $_POST['Q3'];
                        $review = $_POST['review'];
                        $conn = mysqli_connect("localhost","root","","bbdms");
                        if($conn){
                               $uname = $_SESSION['uname'];
                            $sql = "INSERT INTO tblfeedback(username,response1,response2,response3,suggestion)VALUES('$uname','$q1','$q2','$q3','$review')";
                            $result = mysqli_query($conn,$sql);
                            if($result)
                            {
                                echo "<script>alert('Feedback Submitted');window.location.href = 'index.php';</script>";
                            }
                            else{
                                echo "<script>alert('We are facing some issue.Feedback not submitted');</script>";
                            }
                        }else{
                            echo mysqli_connect_error($conn);
                        }
                    }
                ?>








<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>



        <!-- /.row -->
</form>   
        <!-- /.row -->
</div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>