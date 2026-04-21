<?php
const DSN = 'mysql:host=127.0.0.1;dbname=m_agenda;charset=utf8';
const USUARIO = 'root';
const PASSWORD = '';

session_start();
require_once 'clases/Agenda.php';

function conectar() {
    $servidor = 'mysql:host=127.0.0.1;dbname=m_agenda;charset=utf8';
    $usuario = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("$servidor", $usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        die("Error conexión: " . $e->getMessage());
    }
}
?>