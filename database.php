<?php
$server = 'localhost';
$username = 'id8098737_amilcarmoraga';
$password = 'Venus$1717';
$database = 'id8098737_php_login_database';
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Conexión fallida: ' . $e->getMessage());
}
?>