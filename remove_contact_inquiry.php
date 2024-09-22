<?php
session_start();
include "connection.inc.php";
extract($_POST);
if ($conn) {
    $selectquery = "SELECT * FROM contact_inquiry";
    $recordset = mysqli_query($conn, $selectquery);
    while ($row = mysqli_fetch_array($recordset)) {
        $deletequery ="DELETE FROM contact_inquiry WHERE Name = '$inquiry_name'";
        $record = mysqli_query($conn, $deletequery);
    }
    if($record){
        header("Location:contact_inquiry.php");
    }
    else{
        header("Location:contact_inquiry.php");
    }
}
