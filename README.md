# https://lee0x1.net - Lee Howard's Website

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

Article discovery will use the same metadata in a
later update.

Stylesheets and navigation links use root-relative
URLs, so they work regardless of page depth.