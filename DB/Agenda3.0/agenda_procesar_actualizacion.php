<?php
include "clases/Agenda.php";
include "conexion.inc.php";
$id = $_POST["id"];
$nombre = strip_tags (trim($_POST["nombre"]));
$apellidos = strip_tags (trim($_POST["apellidos"]));
$email = strip_tags (trim($_POST["email"]));
$telefono = strip_tags(trim($_POST["telefono"]));
$agenda = new Agenda ();
$agenda->actualizarContacto ($id, $nombre,
$apellidos, $email, $telefono);
header('location: agenda_principal.php');
exit();
?>