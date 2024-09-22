<?php
session_start();
include "connection.inc.php";
extract($_POST);
if ($conn) {
    $selectquery = "SELECT * FROM inquiry";
    $recordset = mysqli_query($conn, $selectquery);
    while ($row = mysqli_fetch_array($recordset)) {
        $deletequery ="DELETE FROM inquiry WHERE name = '$inquiry_name'";
        $record = mysqli_query($conn, $deletequery);
    }
    if($record){
        header("Location:admin_index.php");
    }
    else{
        header("Location:admin_index.php");
    }
}
