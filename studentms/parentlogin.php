<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "parent1" && $password === "1234") {
    $_SESSION["user"] = "parent";
    header("Location: parentdashboard.php");
    exit;
  } else {
    $error = urlencode("Invalid username or password.");
    header("Location: parentlogin.html?error=$error");
    exit;
  }
} else {
  header("Location: parentlogin.html");
  exit;
}
