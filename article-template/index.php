<?php
// up 2 levels to root directory
require_once dirname(__DIR__, 2) . '/bootstrap.php';
$meta = require __DIR__ . '/meta.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require PROJECT_ROOT . '/includes/head.php'; ?>
</head>

<body>
    <?php require PROJECT_ROOT . '/includes/header.php'; ?>

    <main>
        <article>
            
            <h2><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') ?></h2>

            <time datetime="<?= htmlspecialchars($meta['date'], ENT_QUOTES, 'UTF-8') ?>">
              <?= htmlspecialchars($meta['date'], ENT_QUOTES, 'UTF-8') ?>
            </time>

            <!-- Write article content here -->

        </article>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>

</html>