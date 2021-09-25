<?php
session_start();
unset($_SESSION["StudentId"]);
unset($_SESSION["Password"]);
header("Location:Loginpage.php");
?>