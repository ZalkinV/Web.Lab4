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

?>
