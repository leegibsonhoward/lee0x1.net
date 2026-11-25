<?php
require_once dirname(__DIR__) . '/bootstrap.php';
$meta = [
    'title' => "Lee Howard's Website",
    'description' => "Lee Howard's personal network of development and other cool things."
];
$isHome = true;
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
        <section>
            <h2>🧪 Projects</h2>
            <ul>
                <li>
                    <a href="https://lee0x1.github.io/fc" target="_blank">fc</a> (<a href="http://github.com/lee0x1/fc" target="_blank">repo</a>) - github user first commit finder
            </ul>
        </section>
        <br>

        <section>
            <h2>📶 Contact / links</h2>
            <ul>
                <li>email: <a href="mailto:info@lee0x1.net">info@lee0x1.net</a></li>
                <li>twitter: <a href="https://twitter.com/lee0x1/" target="_blank">@lee0x1</a></li>
                <li>github: <a href="https://github.com/lee0x1" target="_blank">@lee0x1</a></li>
            </ul>
            <p>I'm usually very quick to respond via <a href="mailto:info@lee0x1.net">email</a>, but if you prefer to use social media, hit me up on <a href="https://twitter.com/lee0x1/" target="_blank">twitter</a>.
            </p>
            <p><em>Thank you for visiting.</em></p>
        </section>
        <br>
        <hr>

        <section>
            <h2>📔 Articles</h2>
            <ul class="article-list">
                <?php require PROJECT_ROOT . '/includes/articles.php'; ?>
            </ul>
        </section>
        <br>
    </main>

    <?php require PROJECT_ROOT . '/includes/footer.php'; ?>

</body>

</html>