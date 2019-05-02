<?php
require_once "../views/header.html";
?>

<div class="container">
    <h1>Create new article</h1>
    <form method="post" action="index.php?action=add">
        <label>
            Title
            <input type="text" name="title" required>
        </label>
        <label>
            Text
            <textarea name="text" rows="8" required></textarea>
        </label>
        <input type="submit" value="Add article">
    </form>
</div>
