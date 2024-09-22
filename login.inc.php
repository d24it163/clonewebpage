<?php
    session_start();
    include "connection.inc.php";
    extract($_POST);
    $_SESSION['id'] = $username;
    $_SESSION['pss'] = $password;

    $selectQuery = "SELECT * FROM sign_in WHERE username='$username' AND password='$password'";
    $record = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($record);
    
    if ($count == 1) {
        $row = mysqli_fetch_array($record);
        if ($row['status']==1){
            header("Location: admin_index.php?name=");
            exit();
        }
        else{
            header("Location: index.php?name=");
            exit();
        }
        
    } else {
        $msg = "<font color='red'>Invalid Username or Password</font>";
        header("Location: login.php?err=" . urlencode($msg));
        exit();
    }


?>