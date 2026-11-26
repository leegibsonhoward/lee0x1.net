<?php
// up 2 levels to root directory
require_once dirname(__DIR__, 2) . '/bootstrap.php';
$meta = require __DIR__ . '/meta.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require PROJECT_ROOT . '/includes/head.php';
    ?>
</head>

<body>
    <?php require PROJECT_ROOT . '/includes/header.php'; ?>

    <main>
        <article>
            <h2><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            <time datetime="<?= htmlspecialchars($meta['date'], ENT_QUOTES, 'UTF-8') ?>">
              <?= date('F j, Y', strtotime($meta['date'])) ?>
            </time>
            <p>There is a lot of javascript development in the software world today. I have spent quite some time programming in
                javascript. I'm not a web developer. Umm, can't you tell? I want a web presence and having a dedicated web site
                is a no brainer in 2023. I chose to run my own server and use some php this time around.😈</p>
        </article>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>

</html>