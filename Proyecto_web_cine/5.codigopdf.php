<?php
session_start();
include ('tcpdf_min/tcpdf.php');

$usuario = $_GET['usuario'];
$cine = $_GET['cine'];
$asiento = $_GET['asiento'];

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->Write(0, "Entrada Cine\nUsuario: $usuario\nCine: $cine\nAsiento: $asiento\n");

$style = array(
    'border' => 0,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false
);
$qrdata = "http://localhost/proyecto/entrada.php?usuario=$usuario&asiento=$asiento&cine=$cine";
$pdf->write2DBarcode($qrdata, 'QRCODE,H', 15, 50, 50, 50, $style, 'N');

$pdf->Output('entrada.pdf', 'D');
?>
