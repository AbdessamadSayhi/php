<div class="container mt-5">
    <h2>Login as Administrator</h2>
    <form action="./admin/login_process.php" method="post">

        <div class="form-group">
            <label for="username">username:</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>

        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password" id="password" required></input>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <br>

        <?php
        session_start();

        if (!isset($_SESSION['user_id'])) : ?>
            <a href="register.php">You are not registred yet?</a>
        <?php endif; ?>
    </form>

</div>