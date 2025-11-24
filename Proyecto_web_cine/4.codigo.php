<?php
session_start();

require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

if (!isset($_SESSION['usuario'])) {
    header("Location: inicio.php?error=Sesión no iniciada");
    exit();
}

$usuario = $_SESSION['usuario'];
$asiento = $_GET['asiento'] ?? null;
$cine = $_COOKIE['cine'] ?? null;

if (!$asiento || !$cine) {
    die("Faltan datos para generar el QR.");
}

$urlEntrada = "http://localhost/proyecto/entrada.php?nombre=$usuario&asiento=$asiento&cine=$cine";

$qr = QrCode::create($urlEntrada)
    ->setSize(300)
    ->setMargin(10);

$writer = new PngWriter();
$result = $writer->write($qr);

$qrFile = __DIR__ . "/qr_$usuario.png";
$result->saveToFile($qrFile);

?>
<h2>Tu entrada</h2>

<p>Usuario: <?= htmlspecialchars($usuario) ?></p>
<p>Asiento: <?= htmlspecialchars($asiento) ?></p>
<p>Cine: <?= htmlspecialchars($cine) ?></p>

<img src="qr_<?= $usuario ?>.png" alt="Código QR">

<br><br>

<a href="pdf.php?qr=<?= urlencode("qr_$usuario.png") ?>&usuario=<?= $usuario ?>&asiento=<?= $asiento ?>&cine=<?= $cine ?>">Descargar en PDF</a><br><br>

<a href="codigocorreo.php?qr=<?= urlencode("qr_$usuario.png") ?>&usuario=<?= $usuario ?>&asiento=<?= $asiento ?>&cine=<?= $cine ?>">Enviar entrada por correo electrónico</a>