<!DOCTYPE html>
<html>
<head>
  <title>Blood Group Selection</title>
</head>
<body>
  <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $bloodGroup = $_POST["bloodgroup"];
      
      if (empty($bloodGroup)) {
        $error = "Please select a blood group.";
      } else {
        echo "You selected: $bloodGroup";
      }
    }
  ?>

  <h2>Select Your Blood Group</h2>
  <form method="post" action="">
    <label for="bloodgroup">Blood Group:</label>
    <select name="bloodgroup">
      <option value="">--Select--</option>
      <option value="A+" <?php echo (isset($bloodGroup) && $bloodGroup == "A+") ? 'selected' : ''; ?>>A+</option>
      <option value="A-" <?php echo (isset($bloodGroup) && $bloodGroup == "A-") ? 'selected' : ''; ?>>A-</option>
      <option value="B+" <?php echo (isset($bloodGroup) && $bloodGroup == "B+") ? 'selected' : ''; ?>>B+</option>
      <option value="B-" <?php echo (isset($bloodGroup) && $bloodGroup == "B-") ? 'selected' : ''; ?>>B-</option>
      <option value="O+" <?php echo (isset($bloodGroup) && $bloodGroup == "O+") ? 'selected' : ''; ?>>O+</option>
      <option value="O-" <?php echo (isset($bloodGroup) && $bloodGroup == "O-") ? 'selected' : ''; ?>>O-</option>
      <option value="AB+" <?php echo (isset($bloodGroup) && $bloodGroup == "AB+") ? 'selected' : ''; ?>>AB+</option>
      <option value="AB-" <?php echo (isset($bloodGroup) && $bloodGroup == "AB-") ? 'selected' : ''; ?>>AB-</option>
    </select><br><br>

    <?php
      if ($error) {
        echo "<p style='color: red;'>$error</p>";
      }
    ?>

    <input type="submit" value="Submit">
  </form>
</body>
</html>