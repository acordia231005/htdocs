<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de cumpleaños</title>
</head>
<body>
    <h1>Escribe un mensaje para la tarjeta de cumpleaños</h1>

    <form method="post" action="">
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" cols="50" required></textarea><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensaje = htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8');
            $mensaje = nl2br($mensaje);
            echo $mensaje;
        }
        ?>
    </div>
</body>
</html>
