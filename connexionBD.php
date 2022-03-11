<?php
include 'paramBD.php';

$dsn='mysql:host='.$host.';port=3306 ; dbname='.$dbname; // connexion à la base de donnée
$pdo=new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>