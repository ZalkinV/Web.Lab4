<?php
require_once "models/database.php";
require_once "views/header.html";
?>

<div class="container">
    <?php
    $articles = get_articles();
    foreach ($articles as $article): ?>
    <h1>
        <a href="#">
            <?= $article["title"] ?>
        </a>
    </h1>
    <p>
        <?= $article["text"] ?>
    </p>
    <hr>
    <?php endforeach; ?>
</div>
