<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Favorite Colors</title>
</head>
<body>
  <h2>Enter your favorite colors</h2>
  <form action="ResultColors.php" method="POST">
    Favorite color 1: <input type="text" name="color1"><br>
    Favorite color 2: <input type="text" name="color2"><br>
    Favorite color 3: <input type="text" name="color3"><br>
    Favorite color 4: <input type="text" name="color4"><br>
    Favorite color 5: <input type="text" name="color5"><br>
    <input type="submit" value="send colors">
  </form>
</body>
</html>