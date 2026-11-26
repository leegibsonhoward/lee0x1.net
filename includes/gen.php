<?php

$articles = [];

// Discover metadata from article directories.
foreach (glob(PROJECT_ROOT . '/public/*/meta.php') as $file) {
    $meta = require $file;

    if (empty($meta['title']) || empty($meta['date'])) {
        continue;
    }

    $articles[] = [
        'title' => $meta['title'],
        'date' => $meta['date'],
        'url' => '/' . basename(dirname($file)) . '/'
    ];
}

// Sort newest articles first.
usort($articles, function ($a, $b) {
    return strcmp($b['date'], $a['date']);
});

// Generate the article listing.
foreach ($articles as $article) {
    $title = htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8');
    $date = htmlspecialchars($article['date'], ENT_QUOTES, 'UTF-8');
    $url = htmlspecialchars($article['url'], ENT_QUOTES, 'UTF-8');

    echo "<li>{$date}: <a href=\"{$url}\"><strong>{$title}</strong></a></li>\n";
}