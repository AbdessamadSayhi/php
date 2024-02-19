<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_COOKIE["lang"]) && !isset($_COOKIE["bg-color"])) {
    setcookie("language", $_POST["lang"], strtotime("+ 1 month"));
    setcookie("background_color", $_POST["bg-color"], strtotime("+ 1 month"));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <select name="lang" id="">
            <option value="eng">English</option>
            <option value="fr">French</option>
        </select>
        <input type="color" name="bg-color" id="bg-color">
        <input type="submit" value="submit">
    </form>
</body>

</html>