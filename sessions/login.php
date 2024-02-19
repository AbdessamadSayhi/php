<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    session_start();
    if (isset($_SESSION["username"])) {
        header("Location: home.php");
        exit;
    }
}
if (isset($_SESSION) && isset($_POST['unsetForm'])) {

    session_unset();
    session_destroy();
}
if (!isset($_SESSION) && $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['setForm'])) {

    session_start();
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["user_id"] = session_id();
    setcookie("username", $_POST["username"], strtotime("+ 1 month"));
    setcookie("password", $_POST["password"], strtotime("+ 1 month"));
}
if (
    $_SERVER['REQUEST_METHOD'] == "POST"
    && isset($_POST["username"])
    && isset($_POST["password"])
    && isset($_SESSION)
    && isset($_POST['setForm'])
    && isset($_POST["log"])
) {

    $handle = fopen("log.txt", "a+");

    fwrite($handle, "--- " . $_POST["username"] . " logged in at " . date("d/m/Y h:i:s A") . " ---\r\n");
    fwrite($handle, "username = " . $_POST["username"] . "\r\n");
    fwrite($handle, "password = " . $_POST["password"] . "\r\n");
    fwrite($handle, "session_id = " . session_id() . "\r\n");
    fwrite($handle, "------\r\n");

    fclose($handle);
}
if (isset($_SESSION) && isset($_SESSION["username"])) {
    header("Location: home.php");
    exit;
}
/* echo $_SERVER["REQUEST_METHOD"] . " REQUEST";
echo "<br>";

if (isset($_SESSION["user_id"])) :
    echo "user_id : " . $_SESSION["user_id"];
endif;

echo "<br>";
echo "username : " . @$_COOKIE["username"];
echo "</br>";
echo "password : " . @$_COOKIE["password"];
echo "</br>"; */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form method="POST">
        <input type="hidden" name="setForm" value="setForm">

        <input type="hidden" name="formType" value="insertText">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"></br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"></br>

        <input type="checkbox" id="log" name="log" value="yes">
        <label for="log">I want to track my login</label><br>

        <input type="submit" value="login">
    </form>


    <form method="post">
        <input type="hidden" name="unsetForm" value="unsetForm">

        <input type="submit" value="logout">
    </form>
    <a href="home.php">home</a>

</body>

</html>