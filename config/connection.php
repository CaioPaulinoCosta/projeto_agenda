<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try {

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// Ativa modo de erros

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    $error = $e->getMessage();
    echo "Erro $error";
}