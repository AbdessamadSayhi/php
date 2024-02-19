<?php
echo $_SERVER["REQUEST_METHOD"] . " REQUEST";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("refresh: 5");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="post">
    </form>
</body>

</html>