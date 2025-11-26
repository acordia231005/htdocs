<?php
session_start();

$usuario_url = isset($_GET['usuario']);
$asiento_url = isset($_GET['asiento']);
$cine_url    = isset($_GET['cine']);

$usuario_sesion = isset($_SESSION['usuario']);
$asiento_cookie = isset($_COOKIE['asiento']);
$cine_cookie    = isset($_COOKIE['cine']);

if ($usuario_sesion === '') {
    header("Location: inicio.php?error=No has iniciado sesión");
    exit;
}

if ($usuario_url === '' || $usuario_url !== $usuario_sesion) {
    header("Location: inicio.php?error=Usuario no coincide con la sesión");
    exit;
}

if ($asiento_url === 0 || $asiento_cookie === 0 || $asiento_url !== $asiento_cookie) {
    header("Location: inicio.php?error=El asiento del QR no coincide con tus datos");
    exit;
}

if ($cine_url === '' || $cine_cookie === '' || $cine_url !== $cine_cookie) {
    header("Location: inicio.php?error=El cine del QR no coincide con tus datos");
    exit;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entrada válida</title>
    <style>
        h1, p{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .acceso strong{
            color: green; 
            font-size: 22px;
            border: 1px solid green;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Entrada válida</h1>
    <p><strong>Usuario:</strong> <?= htmlspecialchars($usuario_url); ?></p>
    <p><strong>Asiento:</strong> <?= htmlspecialchars($asiento_url); ?></p>
    <p><strong>Cine:</strong> <?= htmlspecialchars($cine_url); ?></p>
    <p class="acceso"><strong>Acceso permitido</strong></p>
</body>
</html>