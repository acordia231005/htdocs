<?php
session_start();
require_once 'funciones.php';


$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['respuesta'])) {
$respuesta = $_POST['respuesta'];
registrarIntento(1);
if (validarRespuesta(1, $respuesta)) {
$_SESSION['nivel'] = 2;
header('Location: prueba2.php');
exit;
} else {
$mensaje = 'Respuesta incorrecta. Inténtalo otra vez.';
}
}
if (isset($_POST['pista'])) {
$pista = pedirPista(1);
}
}

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['respuesta'])) {
$respuesta = $_POST['respuesta'];
registrarIntento(1);
if (validarRespuesta(1, $respuesta)) {
$_SESSION['nivel'] = 2;
header('Location: prueba2.php');
exit;
} else {
$mensaje = 'Respuesta incorrecta. Inténtalo de nuevo.';
}
}
if (isset($_POST['pista'])) {
$pista = pedirPista(1);
}
}
?>


<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Prueba 1 - Castillo</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
<header>
<h1>Prueba 1: El Castillo de Luna</h1>
</header>
<main>
<p>Tras localizar el antiguo enclave defensivo, encontrarás una inscripción que solo menciona una palabra: <strong>___</strong>. Debes introducir la palabra que completa el enigma.</p>


<form method="post">
<label for="respuesta">Tu respuesta:</label>
<input id="respuesta" name="respuesta" required autocomplete="off">
<div class="acciones">
<button class="btn" type="submit">Enviar respuesta</button>
<button class="btn" name="pista" value="1" type="submit">Pedir pista</button>
</div>
</form>


<?php if (!empty($mensaje)): ?>
<p class="error"><?=htmlspecialchars($mensaje)?></p>
<?php endif; ?>


<?php if (isset($pista)): ?>
<div class="pista"><strong>Pista:</strong> <?=htmlspecialchars($pista)?></div>
<?php endif; ?>


<p>Intentos realizados: <?php echo obtenerIntentos(1); ?></p>


<a href="index.php" class="btn">Volver al inicio</a>
</main>
</div>
<script src="interactividad.js"></script>
</body>
</html>