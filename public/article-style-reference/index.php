
<?php
require __DIR__ . '/../../bootstrap.php';

$meta = require __DIR__ . '/meta.php';

require PROJECT_ROOT . '/includes/head.php';
require PROJECT_ROOT . '/includes/header.php';
?>

<main>
    <article>
        <h2><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') ?></h2>

        <time datetime="<?= htmlspecialchars($meta['date'], ENT_QUOTES, 'UTF-8') ?>">
            <?= date('F j, Y', strtotime($meta['date'])) ?>
        </time>

        <p>
            This article is a reference for the HTML elements and
            custom styles available when writing articles for this
            website. It also serves as a visual test for changes
            to the stylesheet.
        </p>

        <hr>

        <section>
            <h3>Headings</h3>

            <p>
                Use headings to organize content into sections
                and subsections.
            </p>

            <h4>Subsection Heading</h4>

            <p>
                This paragraph demonstrates text beneath a
                fourth-level heading.
            </p>
        </section>

        <section>
            <h3>Text Formatting</h3>

            <p>
                This paragraph contains <strong>bold text</strong>,
                <em>italic text</em>, <code>inline code</code>,
                and <a href="https://www.php.net/">a hyperlink</a>.
            </p>

            <p>
                You can also use <mark>highlighted text</mark>,
                <del>deleted text</del>, <ins>inserted text</ins>,
                and <kbd>Ctrl</kbd> + <kbd>C</kbd> for keyboard shortcuts.
            </p>

            <p>
                Here is an example of a longer paragraph. Technical
                writing often benefits from clear explanations,
                short sentences, and examples that demonstrate
                how a particular concept works in practice.
                Multiple sentences also help test the width,
                line height, and readability of the page.
            </p>
        </section>

        <section>
            <h3>Unordered Lists</h3>

            <p>Useful for items without a particular order:</p>

            <ul>
                <li>Linux administration</li>
                <li>C programming</li>
                <li>Web development</li>
                <li>Retro computing</li>
            </ul>
        </section>

        <section>
            <h3>Ordered Lists</h3>

            <p>Useful for instructions and sequential steps:</p>

            <ol>
                <li>Create a source file.</li>
                <li>Write the program.</li>
                <li>Compile the program.</li>
                <li>Run the executable.</li>
            </ol>
        </section>

        <section>
            <h3>Nested Lists</h3>

            <ul>
                <li>
                    Programming languages
                    <ul>
                        <li>C</li>
                        <li>PHP</li>
                        <li>Python</li>
                    </ul>
                </li>
                <li>
                    Operating systems
                    <ul>
                        <li>Linux</li>
                        <li>Windows</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section>
            <h3>Blockquotes</h3>

            <p>
                Blockquotes can highlight quotations or longer
                excerpts from another source.
            </p>

            <blockquote>
                <p>
                    Simplicity is an important consideration when
                    designing software and maintaining systems.
                </p>
            </blockquote>

            <blockquote>
                <p>
                    This is an example of a blockquote containing
                    multiple paragraphs.
                </p>
                <p>
                    The left border should extend alongside
                    the entire quotation.
                </p>
            </blockquote>
        </section>

        <section>
            <h3>Inline Code</h3>

            <p>
                Run <code>gcc main.c -o main</code> to compile
                the program, then execute <code>./main</code>.
            </p>

            <p>
                The <code>malloc()</code> function allocates memory,
                while <code>free()</code> releases it.
            </p>
        </section>

        <section>
            <h3>Code Blocks</h3>

            <p>
                Use a regular code block when a filename
                is unnecessary.
            </p>

            <pre><code>gcc main.c -o main
./main
echo "Program finished"</code></pre>

            <h4>Code Block With Filename</h4>

            <p>
                Use a figure and figcaption to display a filename
                above the code.
            </p>

            <figure class="code-block">
                <figcaption>arena.c</figcaption>
                <pre><code>#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

typedef struct {
    unsigned char *memory;
    size_t capacity;
    size_t offset;
} Arena;

void *arena_alloc(Arena *arena, size_t size)
{
    if (size > arena->capacity - arena->offset) {
        return NULL;
    }

    void *ptr = arena->memory + arena->offset;
    arena->offset += size;

    return ptr;
}

void arena_reset(Arena *arena)
{
    arena->offset = 0;
}

int main(void)
{
    Arena arena = {0};

    arena.capacity = 1024;
    arena.memory = malloc(arena.capacity);

    if (arena.memory == NULL) {
        fprintf(stderr, "Memory allocation failed.\n");
        return 1;
    }

    int *numbers = arena_alloc(&amp;arena, 10 * sizeof(int));

    if (numbers != NULL) {
        for (int i = 0; i &lt; 10; i++) {
            numbers[i] = i * 10;
            printf("numbers[%d] = %d\n", i, numbers[i]);
        }
    }

    // This deliberately long comment tests whether horizontal scrolling works correctly when the code extends beyond the available article width.

    arena_reset(&amp;arena);
    free(arena.memory);

    return 0;
}</code></pre>
            </figure>
        </section>

        <section>
            <h3>Tables</h3>

            <p>
                Tables are useful for displaying commands,
                comparisons, and structured information.
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Command</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>ls</code></td>
                        <td>List directory contents</td>
                        <td><code>ls -la</code></td>
                    </tr>
                    <tr>
                        <td><code>pwd</code></td>
                        <td>Print working directory</td>
                        <td><code>pwd</code></td>
                    </tr>
                    <tr>
                        <td><code>df</code></td>
                        <td>Display filesystem usage</td>
                        <td><code>df -h</code></td>
                    </tr>
                    <tr>
                        <td><code>ps</code></td>
                        <td>Display running processes</td>
                        <td><code>ps aux</code></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h3>Images</h3>

            <p>
                Images should include descriptive alternative
                text and may optionally have a caption.
            </p>

            <figure>
                <img
                    src="/about-me/avatar.png"
                    alt="Portrait of the website author"
                    width="200"
                >
                <figcaption>
                    Example image with a caption.
                </figcaption>
            </figure>

            <p>
                Images can also appear without a caption.
            </p>

            <img
                src="/about-me/avatar.png"
                alt="Portrait of the website author"
                width="100"
            >
        </section>

        <section>
            <h3>Footnotes and References</h3>

            <p>
                C is commonly used in systems programming.
                <?php footnote("C Language Reference", "https://en.cppreference.com/w/c"); ?>
            </p>

            <p>
                PHP is a server-side scripting language
                commonly used for web development.
                <?php footnote("PHP Documentation", "https://www.php.net/manual/en/"); ?>
            </p>

            <p>
                Linux provides a wide range of command-line
                utilities for managing operating systems.
                <?php footnote("GNU Coreutils Manual", "https://www.gnu.org/software/coreutils/manual/"); ?>
            </p>

            <p>
                The references for these footnotes are generated
                automatically at the bottom of the article.
            </p>
        </section>

        <section>
            <h3>Horizontal Rules</h3>

            <p>Content before the horizontal rule.</p>

            <hr>

            <p>Content after the horizontal rule.</p>
        </section>

        <section>
            <h3>Conclusion</h3>

            <p>
                This article demonstrates the standard HTML
                elements and custom code-block styling available
                for writing technical content on this website.
            </p>

            <p>
                It can be revisited when updating the stylesheet
                or preparing new articles.
            </p>
        </section>
    </article>
</main>

<?php require PROJECT_ROOT . '/includes/footer.php'; ?>
