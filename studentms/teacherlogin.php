<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Simple check - replace with real DB check
  if ($username === "teacher1" && $password === "1234") {
    $_SESSION["user"] = "teacher";
    header("Location: teacherdashboard.php");
    exit;
  } else {
    // Redirect back to login with error
    $error = urlencode("Invalid username or password.");
    header("Location: teacherlogin.html?error=$error");
    exit;
  }
} else {
  // Redirect if page accessed without POST
  header("Location: teacherlogin.html");
  exit;
}
?>