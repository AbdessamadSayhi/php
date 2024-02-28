<?php
include_once 'includes/db.php';
include_once 'includes/header.php';
include_once 'register_user.php'; // Include the registration logic file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = isset($_POST['admin']) && $_POST['admin'] == '1' ? 'admin' : 'user'; // Determine role based on radio button

    // Call the registerUser function
    $result = registerUser($pdo, $username, $password, $role);

    echo "<div class='container mt-5'><div class='alert alert-" . ($result['success'] ? "success" : "danger") . "' role='alert'>" . $result['message'] . "</div></div>";
} ?>
<div class="container mt-5">
    <h2>Register</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <div>
            <fieldset>
                <legend>Select your role:</legend>

                <div>
                    <input type="radio" id="user" name="admin" value="0" checked />
                    <label for="user">User</label>
                </div>

                <div>
                    <input type="radio" id="admin" name="admin" value="1" />
                    <label for="admin">Admin</label>
                </div>

            </fieldset>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

        <br>

        <?php if (isset($_SESSION['user_id'])) : ?>
            <a href="login.php">Login to your account</a>
        <?php endif; ?>
    </form>
</div>