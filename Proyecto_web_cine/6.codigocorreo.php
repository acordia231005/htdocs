<?php
session_start();

// Incluir PHPMailer manualmente
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$usuario = $_SESSION['usuario'] ?? '';
$cine = $_COOKIE['cine'] ?? '';
$asiento = $_COOKIE['asiento'] ?? '';
$qrFile = "qr.png";

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       ='sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = '7ed474a18fe8fb';
    $mail->Password   = 'a0b56b35cd2032';
    $mail->Port       = 2525;

    $mail->setFrom('cine@gmail.com', 'Entradas Cine');
    $mail->addAddress('andrescortesdiaz2005@gmail.com');

    if (file_exists($qrFile)) {
        $mail->addAttachment($qrFile);
    }

    $mail->isHTML(true);
    $mail->Subject = 'Tu entrada de cine';
    $mail->Body = "
        <h2>Entrada de cine</h2>
        <p><strong>Usuario:</strong> $usuario</p>
        <p><strong>Cine:</strong> $cine</p>
        <p><strong>Asiento:</strong> $asiento</p>
        <p>Tu entrada con QR está adjunta a este correo.</p>
    ";

    $mail->send();
    echo "Correo enviado correctamente.";
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}
