<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "tomochietti_secu_blog";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "tomochietti";
$password = "d123db698dea8c6c7fff43589d467b9b";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>