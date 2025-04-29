<!DOCTYPE html>
<html>
<head>
  <title>Date Validation</title>
</head>
<body>
  <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $day = $_POST["day"];
      $month = $_POST["month"];
      $year = $_POST["year"];

      if (empty($day) || empty($month) || empty($year)) {
        $error = "Please fill in all fields (day, month, year).";
      } elseif (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        $error = "Day, month, and year must be valid numbers.";
      } else {
        echo "Date is valid: $day/$month/$year";
      }
    }
  ?>

  <h2>Enter Date</h2>
  <form method="post" action="">
    Day: <input type="text" name="day" value="<?php echo isset($day) ? $day : ''; ?>"><br>
    Month: <input type="text" name="month" value="<?php echo isset($month) ? $month : ''; ?>"><br>
    Year: <input type="text" name="year" value="<?php echo isset($year) ? $year : ''; ?>"><br><br>

    <?php
      if ($error) {
        echo "<p style='color: red;'>$error</p>";
      }
    ?>

    <input type="submit" value="Submit">
  </form>
</body>
</html>