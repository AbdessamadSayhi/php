<?php
include './includes/db.php';

$title = $_POST['title'];
$body = $_POST['body'];
$author = $_POST['author'];

$sql = "INSERT INTO posts (title, body, author_id) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$title, $body, $author]);

header("Location: index.php");
