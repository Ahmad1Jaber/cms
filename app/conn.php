<?php


$servername= "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="abc_complaint";
$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}
// $host = '127.0.0.1';
// $db = 'abc_complaint';
// $user = 'root';
// $password = '';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// try{
//     $pdo = new PDO($dsn, $user,$password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
// }catch(PDOxception $e){
//     echo $e->getMessage();
//     throw new PDOException($e->getMessage());
// }

?>