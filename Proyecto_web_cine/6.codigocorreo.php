<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: inicio.php?error=Debe iniciar sesión");
    exit;
}

$usuario = $_SESSION['usuario'];
$cine = $_COOKIE['cine'] ?? '';
$asiento = $_COOKIE['asiento'] ?? '';

$qrFile = "qr.png";


    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io';
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

if(mail($to, $subject, $message, $headers)){
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}