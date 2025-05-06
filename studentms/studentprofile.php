<?php
    session_start();
    if (!isset($_COOKIE['status'])) {
        header('location: login.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Profile</title>
</head>
<body>

  <header>
    <h1>Profile Dashboard</h1>
  </header>

  <main>
    <div>
      <img src="studentpp.png" alt="Student Profile" width="150" height="150">
      <h2>Joyayriya</h2>
      <p>Student</p>
    </div>

    <div>
      <h3>Personal Information</h3>
      <form id="profileForm">
        <label>Student ID:</label>
        <input type="text" value="Joyayriya" readonly >

        <label>Email:</label>
        <input type="email" value="joyayriya@gmailcom" readonly >

        <label>Phone:</label>
        <input type="text" value="012872178" readonly >

        <label>Address:</label>
        <input type="text" value="Dhaka, Bangladesh" readonly >

        <button type="button" onclick="toggleEdit()">Edit</button>
      </form>
    </div>
  </main>

  <script src="studentprofile.js"></script>
</body>
</html>