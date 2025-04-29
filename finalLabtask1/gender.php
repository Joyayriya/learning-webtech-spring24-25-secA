<!DOCTYPE html>
<html>
<head>
  <title>Gender Selection</title>
</head>
<body>
  <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!isset($_POST["gender"])) {
        $error = "Please select a gender.";
      } else {
        $gender = $_POST["gender"];
        echo "You selected: $gender";
      }
    }
  ?>

  <h2>Select Gender</h2>
  <form method="post" action="">
    <input type="radio" name="gender" value="Male" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == "Male") ? 'checked' : ''; ?>> Male<br>
    <input type="radio" name="gender" value="Female" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == "Female") ? 'checked' : ''; ?>> Female<br><br>

    <?php
      if ($error) {
        echo "<p style='color: red;'>$error</p>";
      }
    ?>

    <input type="submit" value="Submit">
  </form>
</body>
</html>