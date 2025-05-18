<?php
session_start();

// Check user type and redirect accordingly
if (isset($_SESSION["user"])) {
    $userType = $_SESSION["user"];
    session_destroy();

    switch ($userType) {
        case "student":
            header("Location: studentlogin.html");
            break;
        case "teacher":
            header("Location: teacherlogin.html");
            break;
        case "parent":
            header("Location: parentlogin.html");
            break;
        default:
            header("Location: index.html"); // fallback
            break;
    }
} else {
    // No session, redirect to home or login selection
    header("Location: index.html");
}

exit;
?>