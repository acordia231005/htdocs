<?php
session_start();
require_once 'funciones.php';

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] < 2) {
    header('Location: index.php');
    exit;
}

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['respuesta'])) {
        $respuesta = $_POST['respuesta'];
        registrarIntento(2);
        if (validarRespuesta(2, $respuesta)) {
            $_SESSION['nivel'] = 3;
            header('Location: prueba3.php');
            exit;
        } else {
            $mensaje = 'Respuesta incorrecta. Inténtalo de nuevo.';
        }
    }
    if (isset($_POST['pista'])) {
        $pista = pedirPista(2);
    }
}
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Prueba 2 - Flamenco</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
<header><h1>Prueba 2: El arte flamenco</h1></header>
<main>
<p>En Mairena del Alcor el cante es identidad, historia y tradición. ¿Cómo se llama el estilo musical que nació del alma andaluza y se transmite por generaciones?</p>

<form method="post">
    <input name="respuesta" required autocomplete="off">
    <div class="acciones">
        <button class="btn" type="submit">Enviar</button>
        <button class="btn" name="pista" value="1" type="submit">Pedir pista</button>
    </div>
</form>

<?php if (!empty($mensaje)): ?>
    <p class="error"><?=htmlspecialchars($mensaje)?></p>
<?php endif; ?>

<?php if (isset($pista)): ?>
    <div class="pista"><strong>Pista:</strong> <?=htmlspecialchars($pista)?></div>
<?php endif; ?>

<p>Intentos realizados: <?= obtenerIntentos(2) ?></p>

<a class="btn salir" href="index.php">Volver al inicio</a>
</main>
</div>
<script src="interactividad.js"></script>
</body>
</html>
