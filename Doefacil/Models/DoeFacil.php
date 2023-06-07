<?php
    
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'doefacil');
   
try {
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . BASE, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error) {
    die("Falha ao se conectar com o banco de dados: " . $error->getMessage());
}