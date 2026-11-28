# Writing Articles

This guide documents the HTML elements and custom features available when writing articles for this website.

For a working example of these elements, see the [Article Style Reference](public/article-style-reference/index.php).

## Headings and paragraphs

Article titles and publication dates are generated from `meta.php`. Begin article sections with `<h3>` and use `<h4>` for subsections.

```html
<section>
    <h3>Section Heading</h3>

    <p>A paragraph of text.</p>

    <h4>Subsection Heading</h4>

    <p>Additional text.</p>
</section>
```

## Text formatting and links

```html
<p>
    <strong>Bold text</strong>,
    <em>italic text</em>,
    <code>inline code</code>,
    and <a href="https://example.com">a link</a>.
</p>
```

Other available elements include `<mark>` for highlighting, `<del>` for deleted text, `<ins>` for inserted text, and `<kbd>` for keyboard input.

## Lists

Unordered lists:

```html
<ul>
    <li>First item</li>
    <li>Second item</li>
</ul>
```

Ordered lists:

```html
<ol>
    <li>First step</li>
    <li>Second step</li>
</ol>
```

Lists can also be nested.

## Blockquotes

```html
<blockquote>
    <p>Quoted text goes here.</p>
</blockquote>
```

Blockquotes can contain multiple paragraphs.

## Code blocks

Use `<pre><code>` for code and terminal output without a filename.

```html
<pre><code>gcc main.c -o main
./main</code></pre>
```

To display a filename above a code block, use the `code-block` class:

```html
<figure class="code-block">
    <figcaption>main.c</figcaption>
    <pre><code>#include &lt;stdio.h&gt;

int main(void)
{
    return 0;
}</code></pre>
</figure>
```

Code blocks preserve indentation and scroll horizontally when lines are too long.

**Remember to escape special characters in code embedded in HTML:**

| Character | HTML entity |
|---|---|
| `<` | `&lt;` |
| `>` | `&gt;` |
| `&` | `&amp;` |

## Tables

```html
<table>
    <thead>
        <tr>
            <th>Command</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ls</td>
            <td>List files</td>
        </tr>
        <tr>
            <td>pwd</td>
            <td>Print working directory</td>
        </tr>
    </tbody>
</table>
```

Tables use separate cell borders and a subtle background for header cells.

## Images

Images should have descriptive alternative text.

```html
<img src="/images/example.png" alt="Description of the image">
```

For an image with a caption:

```html
<figure>
    <img src="/images/example.png" alt="Description of the image">
    <figcaption>Image caption.</figcaption>
</figure>
```

Image paths beginning with `/` are relative to the website root. Ensure the image exists in the corresponding location under `public/`.

## Footnotes and references

Use the existing PHP `footnote()` function to cite a source.

```php
<p>
    PHP is a server-side scripting language.
    <?php footnote("PHP Documentation", "https://www.php.net/"); ?>
</p>
```

The footer automatically generates the References section, including links back to the corresponding footnote markers.

Do not manually create a References section.

## Horizontal rules

Use a horizontal rule to separate sections of content.

```html
<hr>
```

## Article style reference

The permanent reference article is available locally at:

`http://localhost:8000/article-style-reference/`

Use it to review existing styles and test changes to the website's CSS.