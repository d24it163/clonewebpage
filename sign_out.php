<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["pss"]);
$msg="<script>alert('You have Successfully Sign out')</script>";
header("Location:index.php?err=$msg");
?>