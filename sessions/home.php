<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
if (isset($_SESSION) && isset($_POST['unsetForm'])) {

    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>
        <?php
        echo "Welcome ";
        echo isset($_SESSION["username"]) ? $_SESSION["username"] . "</br>" : "unkowen";
        echo "your password is: ";
        echo isset($_SESSION["password"]) ? $_SESSION["password"] . "</br>" : "unkowen";
        echo "and your ID is: ";
        echo isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "unkowen";
        ?>
    </h1>

    <form method="post">
        <input type="hidden" name="unsetForm" value="unsetForm">

        <input type="submit" value="logout">
    </form>

    <a href="login.php">login</a>
</body>

</html>