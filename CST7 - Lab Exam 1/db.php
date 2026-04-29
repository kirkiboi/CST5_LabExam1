<?php

$host = '127.0.0.1';
$user = 'root';
$pass = ''; 

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("USE login_system");

} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>