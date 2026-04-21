<?php
session_start();
require_once 'agenda_funciones.php';

$nombre = strip_tags(trim($_POST['nombre']));
$apellidos = strip_tags(trim($_POST['apellidos']));
$email = strip_tags(trim($_POST['email']));
$telefono = strip_tags(trim($_POST['telefono']));

if (empty($nombre) || empty($apellidos) || empty($email) || empty($telefono)) {
    $_SESSION['mensaje'] = "Campos obligatorios.";
    $_SESSION['tipo_mensaje'] = "error";
    header('Location: agenda_principal.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['mensaje'] = "Email no válido.";
    $_SESSION['tipo_mensaje'] = "error";
    header('Location: agenda_principal.php');
    exit;
}

try {
    $pdo = conectar();
    $sql = "INSERT INTO agenda (nombre, apellidos, correo, telefono) 
            VALUES (:nombre, :apellidos, :email, :telefono)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':apellidos' => $apellidos,
        ':email' => $email,
        ':telefono' => $telefono
    ]);

    $_SESSION['mensaje'] = "Contacto agregado correctamente.";
    $_SESSION['tipo_mensaje'] = "exito";
    header('Location: agenda_principal.php');
    exit;
} catch (PDOException $e) {
    $_SESSION['mensaje'] = "Error al guardar el contacto: " . $e->getMessage();
    $_SESSION['tipo_mensaje'] = "error";
    header('Location: agenda_principal.php');
    exit;
}
