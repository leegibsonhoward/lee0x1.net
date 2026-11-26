<?php
require_once dirname(__DIR__, 2) . '/bootstrap.php';

$meta = [
    'title' => 'About This Website',
    'description' => 'Information about how this website is built and maintained.'
];
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
            <header>
                <h2>About This Website</h2>
            </header>
            <p>Welcome to my personal website.</p>
            
            <section>
                <h3>Principals</h3>
                <p>I want my website to be simple, and free from bloat.</p>
                <ul>
                    <li>This website uses sematic HTML5.</li>
                    <li>This website doesn’t use JavaScript.</li>
                </ul>
            </section>                
        </article>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>
</html>