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
  <title>Favorite Colors Result</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e3f2fd, #ffffff);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .result-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
    }

    .color-item {
      padding: 10px;
      margin: 5px 0;
      border-left: 6px solid #3498db;
      background-color: #f0f6ff;
      border-radius: 5px;
      font-size: 16px;
    }
  </style>
</head>
<body>

<div class="result-container">
  <h2>ResultColors.php</h2>
  <div class="color-item">My Favorite Color 1: <?= htmlspecialchars($_SESSION["color1"]) ?></div>
  <div class="color-item">My Favorite Color 2: <?= htmlspecialchars($_SESSION["color2"]) ?></div>
  <div class="color-item">My Favorite Color 3: <?= htmlspecialchars($_SESSION["color3"]) ?></div>
  <div class="color-item">My Favorite Color 4: <?= htmlspecialchars($_SESSION["color4"]) ?></div>
  <div class="color-item">My Favorite Color 5: <?= htmlspecialchars($_SESSION["color5"]) ?></div>
</div>

</body>
</html>