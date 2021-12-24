<?php
session_start();

$user='root';
$password='';
$pdo = new PDO('mysql:dbname=fullstack;host=127.0.0.1', $user, $password);
$pdo->query("SET NAMES 'utf8'");

$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$cityId = $_POST['city_id'];

$query = "UPDATE users SET name = :name, login = :login, city_id = :cityId WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name,
    ':cityId' => $cityId
]);

if (!$status) {
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else $_SESSION['success'] = "Пользователь успешно изменен!";


header("Location: ../pages/user.php?id=$userId");