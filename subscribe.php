<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Subscribe to our Newsletter</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Subscribe</button>
        </form>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // Collect input data
            $fullName = $_POST['fullName'] ?? ''; // Using the null coalescing operator to ensure a string
            $email = $_POST['email'] ?? '';

            // Sanitize the email
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate inputs
            if (!empty($fullName) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Sanitize the full name for safe output
                $fullName = htmlspecialchars(strip_tags($fullName));

                // Print the data
                echo "<h1>Subscription successful!</h1>";
                echo "<p>Full Name: " . $fullName . "</p>";
                echo "<p>Email: " . htmlspecialchars($email) . "</p>";
            } else {
                // Invalid input handling
                echo "<h1>Invalid input detected.</h1>";
            }
        }
        ?>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>