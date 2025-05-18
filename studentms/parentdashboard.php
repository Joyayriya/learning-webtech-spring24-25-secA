<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"] != "parent") {
  header("Location: parentlogin.html");
  exit;
}

readfile("parentdashboard.html");
?>