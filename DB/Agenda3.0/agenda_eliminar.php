<?php
include "agenda funciones.php";
if (!isset($_GET["id"]) || empty (trim($_GET["id"]))) {
$mensaje = "Debe seleccionar un contacto válido.";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
}
$id = strip_tags(trim($_GET["id"]));
eliminarContacto ($id);
$mensaje = "Contacto eliminado correctamente";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
?>