<?php
include "agenda_funciones.php";

if (!isset($_POST["nombre"]) || empty(trim($_POST["nombre"]))) {
$mensaje = "Debes rellenar todos los datos del formulario  .";
header("location agenda_principal.php?mensaje", urlencode($mensaje));
exit();
}

$nombre = strip_tags(trim($_POST["nombre"]));
$apellidos = strip_tags(trim($_POST["apellidos"]));
$email = strip_tags(trim($_POST["email"]));
$telefono = strip_tags(trim($_POST["telefono"]));

agregarContacto ($nombre, $apellidos, $email, $telefono);
$mensaje = "Contacto añadido correctamente";
header("location agenda_principal.php?mensaje", urlencode($mensaje));
exit();
?>