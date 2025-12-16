<?php
function conectar(){
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=m_agenda;charset=utf8',
            'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES 'utf8'");
        return $pdo;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function obtenerContactos(){
    try {
        $pdo = conectar();
        $stmt = $pdo->prepare("SELECT * FROM agenda");
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
