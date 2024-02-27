<?php
include './includes/db.php';
include './includes/header.php';
?>
<div class="container mt-5">
    <h2>Login as Administrator</h2>
    <form action="login_process.php" method="post">

        <div class="form-group">
            <label for="username">username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password" id="password" required></input>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    
</div>
<?php include_once('./includes/footer.php') ?>