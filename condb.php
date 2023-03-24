<?php

// Conecta ao banco de dados
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dbTCC";

$con = new mysqli($host, $user, $password, $dbname)
    or die('Could not connect to the database server' . mysqli_connect_error());

?>