<?php
include "clases/Agenda.php";
include "clases/Contacto.php";
include "config.php";
$id = $_GET['id'];
$agenda = new Agenda ();
$contacto = $agenda->obtenerContactoPorId ($id);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Contacto</title>
</head>
<body>
<h3>Actualizar Contacto</h3>
<form
action="agenda_procesar_actualizacion.php"
method="POST">
<input type="hidden"
name="id"
value="<?= $contacto->getId() ?>">
<label>Nombre</label><input
type="text"
name="nombre"
value="<?=
htmlspecialchars($contacto->getNombre())
?>"
<label>Nombre</label><input
type="text"
name="nombre"
value="<?=
htmlspecialchars ($contacto->getNombre())
?>"
required><br>
<label>Apellidos</label><input
type="text"
name="apellidos"
value="<?=
htmlspecialchars($contacto->getApellidos())
?>" required><br>
<label>Correo
Electrónico</label><input
type="email"
name="email"
value="<?=
htmlspecialchars($contacto->getCorreo())
?>"
required><br>
<label>Teléfono</label><input
type="text"
name="telefono"
value="<?=
htmlspecialchars($contacto->getTelefono())
?>" required><br>
<input
type="submit"
value="Actualizar Contacto">
</form>
</body>
</html>