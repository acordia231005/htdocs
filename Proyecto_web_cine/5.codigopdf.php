<?php
session_start();
require_once __DIR__ . "/tecnickcom/tcpdf/tcpdf.php";

$usuario = $_SESSION['usuario'];
$cine = $_COOKIE['cine'];
$asiento = $_COOKIE['asiento'];

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, "Entrada de Cine", 0, 1, 'C');
$pdf->Cell(0, 10, "Usuario: $usuario", 0, 1, 'C');
$pdf->Cell(0, 10, "Cine: $cine", 0, 1, 'C');
$pdf->Cell(0, 10, "Asiento: $asiento", 0, 1, 'C');
$pdf->SetMargins(20, 20);


$style = array(
    'border' => 15,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false
);
$qrdata = "http://localhost/Proyecto_web_cine/7.entrada.php?usuario=$usuario&asiento=$asiento&cine=$cine";
$x = ($pdf->getPageWidth() - 50) / 2;
$y = 60;
$pdf->write2DBarcode($qrdata, 'QRCODE,H', $x, $y, 50, 50, $style, 'N');


$pdf->Output('entrada.pdf', 'D');
?>
