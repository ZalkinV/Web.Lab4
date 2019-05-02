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

?>
