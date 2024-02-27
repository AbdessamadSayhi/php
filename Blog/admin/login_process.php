<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    require_once "./includes/db.php";

    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Prepare SQL statement to fetch user from database
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Verify user exists and password is correct
    if ($user && password_verify($password, $user['password'])) {
        // Store user information in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect to appropriate page based on user role
        if ($user['role'] === 'admin') {
            header("Location: admin_dashboard.php");
            exit();
        } else {
            header("Location: ./user_dashboard.php");
            exit();
        }
    } else {
        // Authentication failed
        $_SESSION['login_error'] = "Invalid username or password";
        header("Location: admin_dashboard.php");
        exit();
    }
}
