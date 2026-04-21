<?php
require_once 'agenda_funciones.php';

$id = strip_tags(trim($_GET['id']));

try {
    $pdo = conectar();
    $sql = "DELETE FROM agenda WHERE id_Contacto = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    header("Location: agenda_principal.php");
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    echo "Error al eliminar el contacto";
}
