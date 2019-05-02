<?php
require_once "../models/database.php";
require_once "../views/header.html";
require_once "../views/visual_functions.php";
?>

<div class="container">
    <?php
    $articles = get_articles();
    foreach ($articles as $article): ?>
    <h1>
        <a href="/article.php?id=<?=$article["id"]?>">
            <?= $article["title"] ?>
        </a>
    </h1>
    <p>
        <?= shorten_text($article["text"]) ?>
    </p>
    <hr>
    <?php endforeach; ?>
</div>
