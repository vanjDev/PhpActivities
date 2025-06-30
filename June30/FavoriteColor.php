<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Favorite Colors</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:rgb(32, 32, 32);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }

    h1 {
      text-align: center;
      color: #FFFFFF;
    }
    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      margin-top: 20px;
      background-color: #3498db;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

        .result-container {
      background-color:rgb(32, 32, 32);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }


    .color-item {
      padding: 10px;
      margin: 5px 0;
      border-left: 6px solid #3498db;
      background-color: #f0f6ff;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Enter Your Favorite Colors</h2>
  <form method="POST">
    <label for="color1">Favorite color 1:</label>
    <input type="text" name="color1" id="color1">

    <label for="color2">Favorite color 2:</label>
    <input type="text" name="color2" id="color2">

    <label for="color3">Favorite color 3:</label>
    <input type="text" name="color3" id="color3">

    <label for="color4">Favorite color 4:</label>
    <input type="text" name="color4" id="color4">

    <label for="color5">Favorite color 5:</label>
    <input type="text" name="color5" id="color5">

    <input type="submit" value="Send Colors">
  </form>
</div>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "forma5");

    if ($conn->connect_error) {
      die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
    }

    $fav1 = $conn->real_escape_string($_POST['color1']);
    $fav2 = $conn->real_escape_string($_POST['color2']);
    $fav3 = $conn->real_escape_string($_POST['color3']);
    $fav4 = $conn->real_escape_string($_POST['color4']);
    $fav5 = $conn->real_escape_string($_POST['color5']);

    $sql = "INSERT INTO colors (fav1, fav2, fav3, fav4, fav5)
        VALUES ('$fav1', '$fav2', '$fav3', '$fav4', '$fav5')";

    if ($conn->query($sql) === TRUE) {

        echo '<div class="result-container">';
        echo '<h1>Favorite Colors</h1>';
        echo '<div class="color-item">My Favorite Color 1: '. $fav1. '</div>';
        echo '<div class="color-item">My Favorite Color 2: '. $fav2. '</div>';
        echo '<div class="color-item">My Favorite Color 3: '. $fav3. '</div>';
        echo '<div class="color-item">My Favorite Color 4: '. $fav4. '</div>';
        echo '<div class="color-item">My Favorite Color 5: '. $fav5. '</div>';
        echo "</div>";
      } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
      }

    $conn->close();
  }
?>

</body>
</html>