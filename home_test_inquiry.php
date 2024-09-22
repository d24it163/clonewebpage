<?php
    include "connection.inc.php";
    extract($_POST);
    if($conn)
    {
        $insertquery="INSERT into home_inquiry values('$Name','$number','$address')";
        $result=mysqli_query($conn,$insertquery);
        if($result){
            $msg="<script>alert('Your appointment Book Successfully')</script>";
            header("Location:home_eye_test.php?err=$msg");
        }
        else{
            $msg="<script>alert('Your appointment Book Unsuccessfull')</script>";
            header("Location:home_eye_test.php?err=$msg");
        }
    }
?>