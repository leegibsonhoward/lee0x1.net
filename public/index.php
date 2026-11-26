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
      <hr>
      <ul>
        <li>
          <p><b>ipad-theos-templates</b>:
            <a href="https://github.com/leegibsonhoward/ipad-theos-templates"><small>(github)</small></a>
          </p> Custom Theos templates for iOS 5 development on a jailbroken iPad1
        </li>
        <li>
          <p><b>SliderText</b>:
            <a href="https://github.com/leegibsonhoward/SliderText"><small>(github)</small></a>
          </p> iOS Tweak for custom unlock slider text
        </li>
      </ul>
    </section>
    <br>

    <section>
      <h2>📔 Articles</h2>
      <hr>
      <ul class="article-list">
        <?php require PROJECT_ROOT . '/includes/gen.php'; ?>
      </ul>
    </section>
    <br>
  </main>

  <section>
    <h2>📶 Contact / links</h2>
    <hr>
    <ul>
      <li>email: <a href="mailto:info@leegibsonhoward.net">info@leegibsonhoward.net</a></li>
      <li>twitter: <a href="https://twitter.com/leegibsonhoward/" target="_blank" rel="noopener noreferrer">@leegibsonhoward</a></li>
      <li>github: <a href="https://github.com/leegibsonhoward" target="_blank" rel="noopener noreferrer">@leegibsonhoward</a></li>
    </ul>
    <p>I'm usually very quick to respond via <a href="mailto:info@leegibsonhoward.net">email</a>, but if you prefer to use social media, hit me up on <a href="https://twitter.com/leegibsonhoward/" target="_blank" rel="noopener noreferrer">twitter</a>.
    </p>
    <p><em>Thank you for visiting.</em></p>
  </section>

  <?php require PROJECT_ROOT . '/includes/footer.php'; ?>

</body>

</html>