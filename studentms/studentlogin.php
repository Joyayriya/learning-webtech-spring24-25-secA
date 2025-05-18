<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Simple check - replace with real DB check
  if ($username === "student1" && $password === "1234") {
    $_SESSION["user"] = "student";
    header("Location: studentdashboard.php");
    exit;
  } else {
    // Redirect back to login with error
    $error = urlencode("Invalid username or password.");
    header("Location: studentlogin.html?error=$error");
    exit;
  }
} else {
  // Redirect if page accessed without POST
  header("Location: studentlogin.html");
  exit;
}