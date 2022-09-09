<?php 
$host = "localhost";
$username = "root";
$password = "1234";
$dbname = "attendance_app";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once "crud.php";
$crud = new Crud($pdo);

?>