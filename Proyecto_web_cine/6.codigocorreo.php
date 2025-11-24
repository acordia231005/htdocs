<?php
session_start();
require_once __DIR__ . "/phpmailer/src/PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$usuario = $_SESSION['usuario'];
$cine = $_COOKIE['cine'];
$asiento = $_COOKIE['asiento'];
$email = $_SESSION['email'];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'TU_EMAIL@gmail.com';
    $mail->Password   = 'TU_CONTRASEÑA_APP'; // no tu contraseña normal
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('TU_EMAIL@gmail.com', 'Cine');
    $mail->addAddress('DESTINO@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Tu entrada de cine';
    $mail->Body    = 'Usuario: '.$usuario.'<br>Asiento: '.$asiento.'<br>Cine: '.$cine;

    $mail->send();
    echo 'Correo enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar correo: {$mail->ErrorInfo}";
}
?>
