<?php
require 'db.php';
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

session_start();

if (!isset($_SESSION['id'])) {
    die("Login requerido");
}

$idEntrada = $_GET['id'];

// DATOS
$stmt = $pdo->prepare("
    SELECT e.idEntrada, e.asiento,
           c.nombre AS cine, c.poblacion,
           cl.usuario
    FROM entradas e
    JOIN cines c ON e.idCine = c.idCine
    JOIN clientes cl ON e.idCliente = cl.idCliente
    WHERE e.idEntrada = ?
");
$stmt->execute([$idEntrada]);
$data = $stmt->fetch();

if (!$data) {
    die("Entrada no encontrada");
}

// 🔥 QR EN MEMORIA (SIN ARCHIVOS)
$qr = new QrCode(
    "CINE: {$data['cine']} | ASIENTO: {$data['asiento']} | ID: {$data['idEntrada']}"
);

$writer = new PngWriter();
$result = $writer->write($qr);

// CONVERTIR A BASE64 (ESTO ES LA CLAVE)
$qrBase64 = base64_encode($result->getString());
$qrImg = 'data:image/png;base64,' . $qrBase64;

// 🔥 HTML DEL TICKET REAL
$html = '
<meta charset="UTF-8">

<style>
body {
    font-family: DejaVu Sans;
    background: #fff;
}

/* CONTENEDOR PRINCIPAL CENTRADO */
.wrapper {
    width: 100%;
    text-align: center;
}

/* TICKET */
.ticket {
    display: inline-block;
    border: 2px dashed #333;
    border-radius: 15px;
    padding: 20px;
    width: 80%;
    max-width: 350px;
    text-align: center;
    margin: 0 auto;
}

.header {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
}

.info {
    font-size: 14px;
    margin: 6px 0;
}

.cinema {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
}

.qr {
    margin-top: 15px;
}

.footer {
    margin-top: 15px;
    font-size: 12px;
    color: #666;
}
</style>

<div class="wrapper">

<div class="ticket">

<div class="header">CINE TICKET</div>

<div class="cinema">'.$data['cine'].' ('.$data['poblacion'].')</div>

<div class="info"><b>Cliente:</b> '.$data['usuario'].'</div>
<div class="info"><b>Asiento:</b> '.$data['asiento'].'</div>
<div class="info"><b>ID Entrada:</b> #'.$data['idEntrada'].'</div>

<div class="qr">
    <img src="'.$qrImg.'" width="140">
</div>

<div class="footer">
Presenta este ticket en la entrada
</div>

</div>

</div>
';

// PDF
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'DejaVu Sans');
$dompdf->loadHtml($html, 'UTF-8');
$dompdf->setPaper('A6', 'portrait');
$dompdf->render();
$dompdf->stream("ticket_cine.pdf", ["Attachment" => 1]);
