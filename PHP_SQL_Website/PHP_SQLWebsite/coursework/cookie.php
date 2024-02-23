<?php setcookie("user", "Tas27", time() + 3600);?>
<html>
<head>
<titles> Setting and Reading Cookies</title></head>
<body>
<?php
if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
} else {
    echo "Welcome guest!<br />";
}
?>
</body>
