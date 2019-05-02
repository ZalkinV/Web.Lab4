<?php

$article_id = $_GET["id"];

if (!is_numeric($article_id))
    exit();

require_once "views/header.html";
require_once "models/database.php";

$article = get_article($article_id)

?>

<div class="container">
    <h1>
       <?=$article["title"]?>
    </h1>
    <p>
        <?=$article["text"]?>
    </p>
</div>
