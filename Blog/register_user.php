<?php

function registerUser($pdo, $username, $password, $role)
{
    // Check if the username is already taken
    $sql = "SELECT COUNT(*) FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        return ['success' => false, 'message' => 'Username already exists. Please choose a different username.'];
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        if ($stmt->execute([$username, $hashedPassword, $role])) {
            return ['success' => true, 'message' => 'Registration successful.'];
        } else {
            return ['success' => false, 'message' => 'Registration failed. Please try again.'];
        }
    }
    // Redirect to appropriate page based on user role
    if ($role === 'admin') {
        header("Location: admin_dashboard.php");
        exit();
    } else {
        header("Location: user_dashboard.php");
        exit();
    }
}