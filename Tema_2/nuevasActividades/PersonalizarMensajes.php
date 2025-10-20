<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>personalizar mensajes</title>
</head>
<body>
    <h2>Transforma tu mensaje</h2>

    <form method="post" action="">
        <label for="mensaje">Introduce tu mensaje:</label><br>
        <input type="text" id="mensaje" name="mensaje" required>
        <button type="submit">Transformar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mensaje = $_POST["mensaje"];

        if (!empty($mensaje)) {
            $mayusculas = strtoupper($mensaje);

            $minusculas = strtolower($mensaje);

            echo "<h3>Resultados:</h3>";
            echo "<p><strong>Mayúsculas:</strong> $mayusculas</p>";
            echo "<p><strong>Minúsculas:</strong> $minusculas</p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce un mensaje válido.</p>";
        }
    }
    ?>
</body>
</html>