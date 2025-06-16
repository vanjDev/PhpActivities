ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 22px 50px;
  text-decoration: none;
  font-size: 22px;
  font-weight: bold;
}

li a:hover {
  background-color: #111;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.story {
  padding: 30px;
  text-align: center;
}

.story img {
  width: 80%;
  max-width: 600px;
  height: auto;
  margin-bottom: 20px;
}

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <title>Short Stories</title>
</head>
<body>

<ul>
  <li><a href="story1.php">Story 1</a></li>
  <li><a href="story2.php">Story 2</a></li>
  <li><a href="story3.php">Story 3</a></li>
  <li><a href="story4.php">Story 4</a></li>
  <li><a href="story5.php">Story 5</a></li>
</ul>

<?php include("header.php"); ?>
<div class="story">
  <h2>Welcome to Short Stories!</h2>
  <p>Select a story from the navigation menu above.</p>
</div>
<?php include("footer.php"); ?>

<?php include("header.php"); ?>
<div class="story">
  <h2>The Forest Whisper</h2>
  <img src="images/story1.jpg" alt="Forest">
  <p>Once upon a time, in a silent forest, a whisper traveled with the wind. It carried secrets from the trees to the creatures below. Only the brave could hear it...</p>
</div>
<?php include("footer.php"); ?>