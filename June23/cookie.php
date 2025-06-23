<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timeNow = time();
    setcookie("firstname", $_POST["firstname"], $timeNow + 60);
    setcookie("firstname_time", $timeNow, $timeNow + 60);

    setcookie("middlename", $_POST["middlename"], $timeNow + 60);
    setcookie("middlename_time", $timeNow, $timeNow + 60);

    setcookie("lastname", $_POST["lastname"], $timeNow + 60);
    setcookie("lastname_time", $timeNow, $timeNow + 60);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delayed Cookie Display</title>
  <style>
    body {
      font-family: Arial;
      background-color: #f4f9ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background: white;
      padding: 25px;
      border-radius: 10px;
      width: 400px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background: #3498db;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    .result {
      margin-top: 20px;
      background-color: #e9f3ff;
      padding: 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Enter Personal Information</h2>
  <form method="POST">
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="middlename" placeholder="Middle Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required>
    <input type="submit" value="Set Cookies">
  </form>

  <div class="result">
    <?php
    $now = time();

    // First name after 10 seconds
    if (isset($_COOKIE["firstname_time"]) && $now - $_COOKIE["firstname_time"] >= 10) {
        echo "✅ First Name: " . $_COOKIE["firstname"] . "<br>";
    } else {
        echo "⌛ First Name will be shown after 10 seconds.<br>";
    }

    // Middle name after 20 seconds
    if (isset($_COOKIE["middlename_time"]) && $now - $_COOKIE["middlename_time"] >= 20) {
        echo "✅ Middle Name: " . $_COOKIE["middlename"] . "<br>";
    } else {
        echo "⌛ Middle Name will be shown after 20 seconds.<br>";
    }

    // Last name after 30 seconds
    if (isset($_COOKIE["lastname_time"]) && $now - $_COOKIE["lastname_time"] >= 30) {
        echo "✅ Last Name: " . $_COOKIE["lastname"] . "<br>";
    } else {
        echo "⌛ Last Name will be shown after 30 seconds.<br>";
    }
    ?>
  </div>
</div>

</body>
</html>