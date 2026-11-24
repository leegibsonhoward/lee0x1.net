<?php
// up 2 levels to root directory
require_once dirname(__DIR__, 2) . '/bootstrap.php';
$meta = require __DIR__ . '/meta.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $ROOT = '../';  // DO NOT CHANGE $ROOT
    $KEYWORDS = ""; // article keywords
    $TITLE = $meta['title']; // article title
    $DESC = $meta['description'];     // article description    
    require PROJECT_ROOT . '/includes/head.php';
    ?>
</head>

<body>
    <?php require PROJECT_ROOT . '/includes/header.php'; ?>
    <?php require PROJECT_ROOT . '/includes/footnotes.php'; ?>

    <main>

        <article>
            
            <h2>Article Title</h2>
            <!-- Month DD, YYYY -->
            <time>Month DD, YYYY</time>

            <!-- write new article content -->

        </article>

    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>

</html>