<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"] != "student") {
    header("Location: studentlogin.php");  // Make sure your login page filename is correct here
    exit;
}
?>