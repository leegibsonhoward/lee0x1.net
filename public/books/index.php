<?php
require_once dirname(__DIR__, 2) . '/bootstrap.php';

$meta = [
    'title' => 'Books',
    'description' => 'Books about programming, computing, and other subjects that interest me.'
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
                <h2>Books</h2>
            </header>
            <p>Here is a list of books that I recommend.</p>

            <section>
                <h3>Programming Languages</h3>
                <ul>
                  <li>C Programming a Modern Approach.</li>
                </ul>
            </section>                
        </article>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>
</body>
</html>