<?php
include './includes/db.php';
include './includes/header.php';
?>

<div class="container mt-5">
    <h2>Blog Posts</h2>
    <div class="row">
        <?php
        $sql = 'SELECT * FROM posts ORDER BY created_at DESC';
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($row['body'])); ?></p>
                        <p class="card-text">Author: <?php echo htmlspecialchars($row['author']); ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php require_once('./includes/footer.php') ?>