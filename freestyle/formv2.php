<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="newsletterForm">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
    <?php
    if (isset($_GET['fullName']))
        echo 'You entered ' . htmlspecialchars($_GET['fullName']) . ' into
        the text field';
    ?>
</body>

</html>