<?php
    include "connection.inc.php";
    extract($_POST);
    if($conn)
    {
        $name = $First_name.' '.$Last_name;
        $insertquery="INSERT into contact_inquiry values('$name','$Number','$Email','$txtaddress')";
        $result=mysqli_query($conn,$insertquery);
        if($result){
            $msg="<script>alert('Your Inquiry Insert Successfully')</script>";
            header("Location:contact_us.php?err=$msg");
        }
        else{
            $msg="<script>alert('Your Inquiry Insert Unsuccessfull')</script>";
            header("Location:contact_us.php?err=$msg");
        }
    }
?>