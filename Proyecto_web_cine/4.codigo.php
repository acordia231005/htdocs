<?php
session_start();
include "../Proyecto_web_cine/phpqrcode/phpqrcode/qrlib.php";

if (!isset($_SESSION['usuario'])) {
    header('Location: inicio.php?error=Debe iniciar sesión');
    exit;
}

$usuario = $_SESSION['usuario'];
$cine = $_COOKIE['cine'];
$asiento = $_GET['asiento'] ?? '';
setcookie("asiento", $asiento, time() + 3600 * 24);


if (!$asiento) {
    echo "Asiento no seleccionado.";
    exit;
}

$data = "http://localhost/Proyecto_web_cine/7.entrada.php?usuario=$usuario&asiento=$asiento&cine=$cine";
$nombreArchivo = "qr.png";

QRcode::png($data, $nombreArchivo);

echo "<h2>Tu entrada</h2>";
echo "Usuario: $usuario <br>";
echo "Asiento: $asiento <br>";
echo "Cine: $cine <br><br>";

echo "<img src='$nombreArchivo'><br><br>";

echo "<a href='5.codigopdf.php'>Descargar en PDF</a><br><br>";
echo "<a href='6.codigocorreo.php'>Enviar entrada por correo electrónico</a>";
