<?php
session_start();
$usuario = $_GET['usuario'];
$cine = $_GET['cine'];
$asiento = $_GET['asiento'];
$email = $_SESSION['email'] ?? '';

if (!$email) {
    die("Correo no disponible.");
}

$asunto = "Entrada Cine: $cine Asiento $asiento";
$mensaje = "Hola $usuario,\nTu entrada para el cine $cine, asiento $asiento.\nGracias.";
$cabeceras = "From: no-reply@cine.com";

if (mail($email, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado a $email";
} else {
    echo "Error enviando correo.";
}
?>
