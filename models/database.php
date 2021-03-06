<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "newsdb";

$connection = mysqli_connect($server_name, $user_name, $password, $database_name);

if (mysqli_connect_errno())
{
    echo "Error: ".mysqli_connect_error();
    exit();
}



function get_articles()
{
    global $connection;
    $query = "SELECT * FROM articles";
    $query_result = mysqli_query($connection, $query);
    $articles = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
    return $articles;
}

function get_article($id)
{
    global $connection;
    $query = "SELECT * FROM articles WHERE id={$id}";
    $query_result = mysqli_query($connection, $query);
    $article = mysqli_fetch_assoc($query_result);
    return $article;
}

function delete_article($id)
{
    global $connection;
    $query = "DELETE FROM articles WHERE id={$id}";
    $query_result = mysqli_query($connection, $query);
}

function add_article($title, $text)
{
    global $connection;
    $query = "INSERT INTO articles (id, title, text) VALUES (NULL, '{$title}', '{$text}')";
    $query_result = mysqli_query($connection, $query);
}

?>
