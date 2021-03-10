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

</head>

<body>

<?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="mt-4 mb-3">LOGIN</h1>
        
        <!-- Content Row -->
        <form name="donar" method="POST" action="login.php">
            <!-- username field -->
            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Username<span style="color:red">*</span></div>
            <div><input type="text" name="uname" class="form-control" required></div>
            </div>
            </div>
            <!-- password field -->
            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Password<span style="color:red">*</span></div>
            <div><input type="password" name="pwd" class="form-control" required></div>
            </div>
            </div>
            <?php
                    session_start();
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $uname = $_POST['uname'];
                        $pwd = $_POST['pwd'];
                        // $hash = password_hash($pwd, PASSWORD_DEFAULT);
                        $conn = mysqli_connect("localhost","root","","bbdms");
                        if($conn)
                        {
                            $sql = "SELECT * FROM  tblblooddonars WHERE username = '$uname'";
                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
                            if($num>0)
                            {
                                    // -----------------username and password verification--------------------
                                     while($row = mysqli_fetch_assoc($result))
                                     {
                                        if($pwd==$row['password1'])
                                        {
                                            echo"<script>
                                            alert ('Logged in!'); window.location.href = 'index.php';</script>";
                                            $_SESSION['uname'] = $row['FullName'];
                                            // echo "Welcome " . $_SESSION['uname'];
                                        }
                                        else{
                                            echo"<script>
                                            alert ('Invalid Credentials.');</script>";
                                        }
                                     }
                            }
                            else
                            {
                                echo"<script>
                                            alert ('Account not found.Register first!');</script>";
                            }
                        }else{
                            echo mysqli_connect_error($conn);
                        }
                    }
                
                ?>
            <!-- submit button -->
            <div class="row">
            <div class="col-lg-4 mb-4">
            <div><input type="submit" name="submit" class="btn btn-primary" value="Login" style="cursor:pointer"></div>
            </div>
            <div class="col-lg-4 mb-4">
            <div><button onclick="document.location='admin/index.php'">Admin login</button></div>
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