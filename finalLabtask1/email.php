<!DOCTYPE html>
<html>
<head>
  <title>Email Validation</title>
</head>
<body>
  <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      if (empty($email)) {
        $error = "Email cannot be empty.";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
      } else {
        echo "Email is valid: $email";
      }
    }
  ?>

  <form method="post" action="">
    Email: <input type="text" name="email" />
    <input type="submit" value="Submit" />
  </form>

  <?php
    if ($error) {
      echo "<p style='color: red;'>$error</p>";
    }
  ?>

</body>
</html>