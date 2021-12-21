<?php
// подключение к БД
$user='root';
$password='';
$pdo = new PDO('mysql:dbname=fullstack;host=127.0.0.1', $user, $password);
$pdo->query("SET NAMES 'utf8'");

$userId = $_POST['id'];

$query = "DELETE FROM users WHERE id = :id";
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId,
]);

header('Location: ../index.php');