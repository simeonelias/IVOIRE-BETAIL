<?php

$dbhost='localhost';
$dbname='betail';
$dbuser='root';
$dbpwd='';

try{
	$db= new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,[PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"]);
} catch(PDOExeption $e){
	die("Echec de la connexion à la base de donnée!");
}

?>