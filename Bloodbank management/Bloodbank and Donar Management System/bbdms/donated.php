<?php
     
        session_start();
        $fullname = $_SESSION['fullname'];
        $uname = $_SESSION['uname'];
        $mobile =$_SESSION['mobileno'];
        //echo $mobile;
        $age  = $_SESSION['age'] ;
        $gender = $_SESSION['gender'];
        $bloodgroup = $_SESSION['bloodgroup'];
        $dondate = $_POST['dondate'];
        $conn = mysqli_connect("localhost","root","","bbdms");
        if($conn){	
            //echo "hello";	
            $sql = "INSERT INTO  donated (FullName,username,MobileNumber,Age,Gender,BloodGroup,Donationdate) VALUES('$fullname','$uname','$mobile',$age,'$gender','$bloodgroup','$dondate')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>
                 alert('Donation confirmed.');
                window.location.href = 'feedback.php';
                </script>";
        
        }
    }
?>