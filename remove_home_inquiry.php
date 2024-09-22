<?php
session_start();
include "connection.inc.php";
extract($_POST);
if ($conn) {
    $selectquery = "SELECT * FROM home_inquiry";
    $recordset = mysqli_query($conn, $selectquery);
    while ($row = mysqli_fetch_array($recordset)) {
        $deletequery ="DELETE FROM home_inquiry WHERE Name = '$inquiry_name'";
        $record = mysqli_query($conn, $deletequery);
    }
    if($record){
        header("Location:home_inquiry.php");
    }
    else{
        header("Location:home_inquiry.php");
    }
}