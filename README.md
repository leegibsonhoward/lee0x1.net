# https://leegibsonhoward.net - Lee Howard's Website

Welcome to my personal network of development and other cool things.

This site runs on Nginx server on Debian GNU/Linux. :)

## 0x05 Reasons
1. run nginx on debian.
2. use html to write articles.
3. php server side scripting.
4. no client-side javascript... yet!
5. no package manager to handle tons of dependencies.

## Project structure

- `bootstrap.php` defines the project root.
- `includes/` contains shared PHP components.
- `public/` contains the web-accessible pages and assets.

Shared components use `PROJECT_ROOT` for consistent
filesystem paths.

### Article metadata

Each article contains a `meta.php` file defining its
title, description, publication date, and URL slug.

The shared `head.php` uses this metadata to generate
the HTML title and description tags.

The `gen.php` file automatically discovers articles
by reading their metadata, sorts them by publication
date, and generates the homepage article listing.

Stylesheets and navigation links use root-relative
URLs, so they work regardless of page depth.

### Shared components

The `bootstrap.php` file loads the footnote functions
used throughout the website.

The header uses `$isHome` to display the welcome message
on the homepage without depending on specific URLs.

The footer automatically generates references when
footnotes are present.

### Publishing an article

1. Copy `article-template/` into `public/`.
2. Rename the directory using the article's URL slug.
3. Update `meta.php` with the title, description, date, and slug.
4. Write the article content in `index.php`.

The article template uses shared PHP components for the
HTML head, header, and footer.

The homepage automatically discovers articles through
their `meta.php` files and lists them newest-first.

Footnote references are generated automatically when
an article contains footnotes.

See [Writing Articles](WRITING.md) for supported HTML elements and examples.

### Footnotes

Articles support automatically numbered footnotes and references.

To add a footnote, call `footnote()` within the article:

```php
<?php footnote("PHP Documentation", "https://www.php.net/"); ?>
```

The first argument is the reference text, and the second is
the URL.

For a footnote without a URL, pass an empty string:

```php
<?php footnote("Additional explanation.", ""); ?>
```

Footnotes are numbered automatically in the order they appear.

The shared footer calls `footnote_gen_references()` to generate
the References section when footnotes exist. Each reference
includes a link back to its location in the article.

### Development and deployment

Run the website locally using PHP's built-in server:

```sh
php -S localhost:8000 -t public