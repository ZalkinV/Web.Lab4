<?php
require_once "../views/header.html";
?>

<div class="container">
    <h1 class="text-center">Create new article</h1>
    <form method="post" action="index.php?action=add">
        <div class="form-group">
            <label class="h2">Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
            <label class="h2">Text</label>
            <textarea class="form-control" name="text" rows="8" required></textarea>
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="Create">
        </div>
    </form>
</div>
