<?php
include 'funciones.php';
session_start();

if (!isset($_SESSION['prueba2_superada'])) {
header('Location: prueba2.php');
exit();
}


$mensaje = "";
$pista = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['respuesta'])) {
if (validarRespuesta(3, $_POST['respuesta'])) {
$_SESSION['prueba3_superada'] = true;
exit();
} else {
$mensaje = "Respuesta incorrecta. ¡Sigue intentándolo!";
}
}


if (isset($_POST['pista'])) {
$pista = obtenerPista(3);
}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilos.css">
<title>Prueba 3 - Escape Room</title>
</head>
<body>
<div class="contenedor">
<h2> Prueba 3-El Enigma del Habitante de Gandul</h2>
<p>En las ruinas de la aldea de <strong>Gandul</strong> se encontró una antigua inscripción que menciona a un personaje legendario famoso por su habilidad con la espada.
Sus hazañas lo convirtieron en una figura popular entre los vecinos del pasado.
<br><br>
 <strong>Pregunta:</strong> ¿Cómo se llamaba este personaje legendario?</p>


<form method="POST">
<input type="text" name="respuesta" placeholder="Escribe su nombre..." required>
<button type="submit">Comprobar</button>
</form>


<form method="POST">
<button type="submit" name="pista"> Pedir pista</button>
</form>


<?php if ($mensaje) echo "<p class='error'>$mensaje</p>"; ?>
<?php if ($pista) echo "<p class='pista'><strong>Pista:</strong> $pista</p>"; ?>
</div>
</body>
</html>