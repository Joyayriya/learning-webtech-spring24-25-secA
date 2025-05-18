<?php
// Enable error reporting (for development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Validate teacher session
if (!isset($_SESSION["user"]) || $_SESSION["user"] !== "teacher") {
    header("Location: teacherlogin.html");
    exit;
}

// If session is valid, include the HTML
readfile("teacherdashboard.html");
?>