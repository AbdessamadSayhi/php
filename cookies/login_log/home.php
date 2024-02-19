<?php
if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) :
    $username = $_COOKIE["username"];
    $password = $_COOKIE["password"];
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $_SERVER['REQUEST_METHOD'] . "<br>";    ?>
    <h1>hello, <?php echo isset($username) && isset($password) ? "Hi, $username your password is $password" : "unkowen" ?></h1>
    <a href="insert.php">insert</a><br>
    <a href="read.php">read</a>
</body>

</html>