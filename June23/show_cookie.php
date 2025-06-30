
<!DOCTYPE html>
<html>
<head>
    <title>Show Cookies</title>
    <script>
        function getCookie(name) {
            let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            return match ? decodeURIComponent(match[2]) : '';
        }

        function showCookies() {
            document.getElementById("firstname").textContent = getCookie("firstname");
            document.getElementById("middlename").textContent = getCookie("middlename");
            document.getElementById("lastname").textContent = getCookie("lastname");
        }

        function resetCookies() {
            document.cookie = "firstname=; path=/;";
            document.cookie = "middlename=; path=/;";
            document.cookie = "lastname=; path=/;";
            showCookies();
        }

        setInterval(showCookies, 1000);
    </script>
</head>
<body>
    <h1>Cookies Display</h1>
    <p>First Name (after 10s): <span id="firstname"></span></p>
    <p>Middle Name (after 20s): <span id="middlename"></span></p>
    <p>Last Name (after 30s): <span id="lastname"></span></p>
    <button onclick="resetCookies()">Reset Cookies</button>
</body>
</html>
