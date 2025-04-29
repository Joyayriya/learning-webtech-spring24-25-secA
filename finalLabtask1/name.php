<!DOCTYPE html>
<html>
<head>
  <title>Name Validation</title>
</head>
<body>
  <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      if (empty($name)) {
        $error = "Name cannot be empty.";
      } elseif (!preg_match("/^[A-Za-z\s]+$/", $name)) {
        $error = "Name can only contain letters and spaces.";
      } else {
        echo "Name is valid: $name";
      }
    }
  ?>

  <form method="post" action="">
    Name: <input type="text" name="name" />
    <input type="submit" value="Submit" />
  </form>

  <?php
    if ($error) {
      echo "<p style='color: red;'>$error</p>";
    }
  ?>

</body>
</html>