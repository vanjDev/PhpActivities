<?php
session_start();

$_SESSION["color1"] = $_POST["color1"];
$_SESSION["color2"] = $_POST["color2"];
$_SESSION["color3"] = $_POST["color3"];
$_SESSION["color4"] = $_POST["color4"];
$_SESSION["color5"] = $_POST["color5"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Result Colors</title>
</head>
<body>
  <h2>ResultColors.php</h2>
  <?php
  echo "My Favorite Color 1: " . $_SESSION["color1"] . "<br>";
  echo "My Favorite Color 2: " . $_SESSION["color2"] . "<br>";
  echo "My Favorite Color 3: " . $_SESSION["color3"] . "<br>";
  echo "My Favorite Color 4: " . $_SESSION["color4"] . "<br>";
  echo "My Favorite Color 5: " . $_SESSION["color5"] . "<br>";
  ?>
</body>
</html>
