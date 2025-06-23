<?php
setcookie("firstname", "Chris", time() + 10);
setcookie("middlename", "Rosales", time() + 20);
setcookie("lastname", "Tio", time() + 30);
?>

<html>
<body>
<h2>Cookies Set. Refresh the page to see values after time.</h2>
<?php
if (isset($_COOKIE["firstname"])) {
    echo "First Name: " . $_COOKIE["firstname"] . "<br>";
}
if (isset($_COOKIE["middlename"])) {
    echo "Middle Name: " . $_COOKIE["middlename"] . "<br>";
}
if (isset($_COOKIE["lastname"])) {
    echo "Last Name: " . $_COOKIE["lastname"] . "<br>";
}
?>
</body>
</html>