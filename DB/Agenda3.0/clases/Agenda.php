<?php
require_once 'config.php';
require_once 'Contacto.php';

function conectar(){
    try {
        $pdo = new PDO(DSN, USUARIO, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES 'utf8'");
        return $pdo;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

class Agenda {
public function obtenerContactos () {
    $pdo = conectar();
    $sql = "SELECT * FROM agenda";
    $stmt = $pdo->query($sql);
    $contactos = [];
    while ($row = $stmt->fetch()) {
    $contactos [] = new Contacto ($row['id'] ?? '',
    $row['nombre'] ?? '',
    $row['apellidos'] ?? '',
    $row['email'] ?? '', 
    $row['telefono'] ?? '');
    }
    return $contactos;
}
}
