<?php
require_once "../models/database.php";
require_once "../views/header.html";
require_once "../views/visual_functions.php";


if (isset($_GET["action"]))
    $action = $_GET["action"];

if ($action == "delete")
{
    $article_id = $_GET["id"];
    delete_article($article_id);
}

if ($action == "add")
{
    $article_title = $_POST["title"];
    $article_text = $_POST["text"];
    add_article($article_title, $article_text);
}

?>

<div class="container">
    <a class="btn btn-success mb-3" href="article_adding.php">Create article</a>
    <?php
    $articles = get_articles();
    foreach ($articles as $article): ?>
    <div class="row">
        <div class="col-sm-8">
            <h1>
                <a href="/article.php?id=<?=$article["id"]?>">
                    <?= $article["title"] ?>
                </a>
            </h1>
        </div>
        <div class="col-sm-4 text-sm-right my-auto">
            <a class="btn btn-danger" href="index.php?action=delete&id=<?=$article["id"]?>">
                Delete article
            </a>
        </div>
    </div>
    <p>
        <?= shorten_text($article["text"]) ?>
    </p>
    <hr>
    <?php endforeach; ?>
</div>
