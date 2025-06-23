<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set cookies with staggered delays
    setcookie("firstname", $_POST["firstname"], time() + 10);    // visible after 10 seconds
    setcookie("middlename", $_POST["middlename"], time() + 20);  // visible after 20 seconds
    setcookie("lastname", $_POST["lastname"], time() + 30);      // visible after 30 seconds

    // Redirect to self to prevent form resubmission
    header("Location: cookieDelayForm.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Staggered Cookie Info</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f7fb;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="text"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #3498db;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }

    .cookie-result {
      margin-top: 20px;
      padding: 15px;
      background-color: #eef7ff;
      border-left: 4px solid #2980b9;
      border-radius: 6px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Enter Personal Information</h2>
  <form method="POST" action="">
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="middlename" placeholder="Middle Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required>
    <input type="submit" value="Submit">
  </form>

  <div class="cookie-result">
    <?php
    if (isset($_COOKIE["firstname"])) {
        echo "✅ First Name: " . htmlspecialchars($_COOKIE["firstname"]) . "<br>";
    } else {
        echo "⌛ First Name cookie will appear after 10 seconds.<br>";
    }

    if (isset($_COOKIE["middlename"])) {
        echo "✅ Middle Name: " . htmlspecialchars($_COOKIE["middlename"]) . "<br>";
    } else {
        echo "⌛ Middle Name cookie will appear after 20 seconds.<br>";
    }

    if (isset($_COOKIE["lastname"])) {
        echo "✅ Last Name: " . htmlspecialchars($_COOKIE["lastname"]) . "<br>";
    } else {
        echo "⌛ Last Name cookie will appear after 30 seconds.<br>";
    }
    ?>
  </div>
</div>

</body>
</html>