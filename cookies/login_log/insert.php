<?php


if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_COOKIE["username"])) {

    setcookie("username", $_POST["username"], strtotime("+ 1 month"));
    setcookie("password", $_POST["password"], strtotime("+ 1 month"));

    $loc = $_SERVER["REQUEST_URI"];
    header("Location: $loc");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_COOKIE["username"])) {

    $handle = fopen("log.txt", "a+");

    fwrite($handle, "--- " . $_COOKIE["username"] . " logged in at " . date("d/m/Y h:i:s A") . " ---\r\n");
    fwrite($handle, "username = " . $_COOKIE["username"] . "\r\n");
    fwrite($handle, "password = " . $_COOKIE["password"] . "\r\n");
    fwrite($handle, "------\r\n");

    fclose($handle);

    header("Location: home.php");
}
echo "REQUEST METHOD : " . $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "USERNAME : " . @$_COOKIE["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>

<body>
    <form method="POST">

        <input type="hidden" name="formType" value="insertText">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"></br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"></br>

        <input type="checkbox" id="log" name="log" value="yes">
        <label for="log">I want to track my login</label><br>

        <input type="submit" value="login">
    </form>
    <a href="read.php">read</a>
    <a href="test.php">test</a>
</body>

</html>