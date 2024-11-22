<?php

$dsn = 'mysql:host=localhost;dbname=libreria'; // Cambia 'libreria' si es diferente el nombre
$username = 'root'; // Cambia esto por tu usuario
$password = ''; // Cambia esto por tu contraseña si la tienes configurada

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
