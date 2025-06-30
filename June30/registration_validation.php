<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration with Database</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }
    .container {
      background: #fff;
      padding: 20px;
      max-width: 500px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      margin-top: 15px;
      background-color: #007bff;
      color: white;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .result {
      margin-top: 20px;
      padding: 15px;
      background: #e9ecef;
      border-left: 5px solid #007bff;
    }
    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form method="POST">
    <label for="first">First Name:</label>
    <input type="text" name="first" required>

    <label for="middle">Middle Name:</label>
    <input type="text" name="middle" required>

    <label for="last">Last Name:</label>
    <input type="text" name="last" required>

    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" required>

    <label for="address">Address:</label>
    <input type="text" name="address" required>

    <input type="submit" name="submit" value="Register">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "forma5");

    if ($conn->connect_error) {
      die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
    }

    // Get and sanitize input
    $first = $conn->real_escape_string($_POST['first']);
    $middle = $conn->real_escape_string($_POST['middle']);
    $last = $conn->real_escape_string($_POST['last']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $address = $conn->real_escape_string($_POST['address']);

    $sql = "INSERT INTO users (firstname, middlename, lastname, dob, address)
        VALUES ('$first', '$middle', '$last', '$dob', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='result'>";
        echo "<h3>Registration Successful!</h3>";
        echo "<p><strong>Full Name:</strong> $first $middle $last</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "</div>";
      } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
      }

    $conn->close();
  }

  
  ?>
</div>

</body>
</html>