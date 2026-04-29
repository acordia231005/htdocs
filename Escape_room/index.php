<?php

session_start();

if (!isset($_SESSION['nivel'])) {
$_SESSION['nivel'] = 0;
$_SESSION['pistas_usadas'] = 0;
}
require_once 'funciones.php';
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Escape Room - Mairena del Alcor</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
<header>
<h1>Escape Room: El Secreto de Mairena del Alcor</h1>
<p>Sumérgete en la historia y el patrimonio local. Resuelve los acertijos para avanzar.</p>
</header>


<main>
<?php if ($_SESSION['nivel'] === 0): ?>
<section class="inicio">
<h2>Bienvenido</h2>
<p>Te encuentras en Mairena del Alcor. Para escapar deberás resolver 3 pruebas inspiradas en monumentos y tradiciones locales.</p>
<form method="post">
<button name="empezar" class="btn">Comenzar Escape Room</button>
</form>
<?php
if (isset($_POST['empezar'])) {
$_SESSION['nivel'] = 1; 
header('Location: prueba1.php');
exit;
}
?>
</section>
<?php elseif ($_SESSION['nivel'] >= 1 && $_SESSION['nivel'] <= 3): ?>
<section>
<h2>Continuar</h2>
<p>Estás en la prueba <?php echo $_SESSION['nivel']; ?>.</p>
<a class="btn" href="prueba<?php echo $_SESSION['nivel']; ?>.php">Ir a la prueba</a>
</section>
<?php else: ?>
<section class="final">
<h2>¡Enhorabuena!</h2>
<p>Has completado el Escape Room. Gracias por descubrir el patrimonio de Mairena del Alcor.</p>
<form method="post">
<button name="reiniciar" class="btn">Reiniciar</button>
</form>
<?php
if (isset($_POST['reiniciar'])) {
session_destroy();
header('Location: index.php');
exit;
}
?>
</section>
<?php endif; ?>
</main>


<footer>
<p>Proyecto educativo — Mairena del Alcor</p>
</footer>
</div>
<script src="interactividad.js"></script>
</body>
</html>