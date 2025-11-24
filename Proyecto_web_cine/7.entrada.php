<?php

$usuario_real = $_SESSION['usuario'] ?? '';
$asiento_real = $_SESSION['asiento'] ?? '';
$cine_real    = $_SESSION['cine'] ?? '';

$usuario_qr = $_GET['usuario'] ?? '';
$asiento_qr = $_GET['asiento'] ?? '';
$cine_qr    = $_GET['cine'] ?? '';

if (!$usuario_real || !$asiento_real || !$cine_real) {
    header("Location: inicio.php?error=Sesion_incompleta");
    exit;
}

if ($usuario_real == $usuario_qr &&
    $asiento_real == $asiento_qr &&
    $cine_real == $cine_qr) {

    echo "<h2>Entrada válida</h2>";
    echo "Usuario: $usuario_qr <br>";
    echo "Asiento: $asiento_qr <br>";
    echo "Cine: $cine_qr <br>";

} else {
    header("Location: inicio.php?error=Entrada_incorrecta");
    exit;
}
