<?php
$host = '127.0.0.1';
$db = 'abc_complaint';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn, $user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
}catch(PDOxception $e){
    echo $e->getMessage();
    throw new PDOException($e->getMessage());
}

?>