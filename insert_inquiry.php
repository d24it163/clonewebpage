<?php
    include "connection.inc.php";
    extract($_POST);
    if($conn)
    {
        $name = $firstName.' '.$lastName;
        $insertquery="INSERT into inquiry values('$name','$number','$email','$address')";
        $result=mysqli_query($conn,$insertquery);
        if($result){
            $msg="<script>alert('Your Inquiry Insert Successfully')</script>";
            header("Location:inquiry.php?err=$msg");
        }
        else{
            $msg="<script>alert('Your Inquiry Insert Unsuccessfull')</script>";
            header("Location:inquiry.php?err=$msg");
        }
    }
?>