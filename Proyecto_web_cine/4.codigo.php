<?php
session_start();
include  'phpqrcode/qrlib.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: inicio.php?error=Debe iniciar sesión');
    exit;
}


$usuario = $_SESSION['usuario'];
$cine = $_SESSION['cine'];
$asiento = $_GET['asiento'] ?? '';

if (!$asiento) {
    echo "Asiento no seleccionado.";
    exit;
}

$data = "http://localhost/proyecto/entrada.php?usuario=$usuario&asiento=$asiento&cine=$cine";
$tempDir = sys_get_temp_dir();
$filename = "$tempDir/qr_{$usuario}_{$asiento}.png";

QRcode::png($data, $filename);

echo "<h2>Entrada para $usuario</h2>";
echo "Cine: $cine <br> Asiento: $asiento <br>";
echo "<img src='data:image/png;base64,".base64_encode(file_get_contents($filename))."'><br>";
echo "<a href='codigopdf.php?usuario=$usuario&asiento=$asiento&cine=$cine'>Descargar PDF</a><br>";
echo "<a href='codigocorreo.php?usuario=$usuario&asiento=$asiento&cine=$cine'>Enviar por correo</a><br>";
?>
