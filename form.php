<pre>
<?php

$user = 'root';
$pswd = '';
$pdo = new PDO('mysql:dbname=fullstack;host=127.0.0.1', $user, $pswd);
$pdo->query("SET NAMES 'utf8'");

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$city_id = $_POST['city_id'];

$query = "INSERT INTO `users` (`name`, `login`, `password`, `city_id`) VALUES(:name, :login, :password, :city_id)";
$res = $pdo->prepare($query);

$res->execute([
    ':name' => $name,
    ':login' => $login,
    ':password' => $password,
    ':city_id' => $city_id,
]);

header('Location: index.php');

