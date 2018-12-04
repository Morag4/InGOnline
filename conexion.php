<?php
$server = 'localhost';
$username = 'id8098737_amilcarmoraga';
$password = 'Venus$1717';
$database = 'id8098737_php_login_database';

  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
if(!$conn){
	echo "no conectado";
}
else
{echo "conexion hecha";}
?>