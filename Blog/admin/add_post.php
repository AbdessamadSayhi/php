<?php include './includes/header.php'; ?>
<div class="container mt-5">
    <h2>Add a new post</h2>
    <form action="./post_submit.php" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" name="author" id="author" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>
</div>
<?php include_once('./includes/footer.php') ?>