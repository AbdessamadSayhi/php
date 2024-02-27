<?php
include './includes/db.php';
include './includes/header.php';
?>
<h1>ADMIN</h1>
<div class="row">
    <?php
    $sql = 'SELECT * FROM posts ORDER BY created_at DESC';
    $stmt = $pdo->query($sql);
    //<button class="btn btn-dark">edit</button>
    //<button class="btn btn-danger">delete</button>
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                    <p class="card-text"><?php echo nl2br(htmlspecialchars($row['body'])); ?></p>
                    <p class="card-text">Author: <?php echo htmlspecialchars($row['author_id']); ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php include_once('./includes/footer.php') ?>