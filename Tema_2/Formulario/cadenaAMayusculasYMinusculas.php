<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertidor</title>
</head>
<body>
    <h2>Conversor de Texto </h2>

    <form method="post">
        <label for="texto">Introduce tu texto:</label><br>
        <input type="text" name="texto" id="texto" required>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = trim($_POST["texto"]);

        if (!empty($texto)) {
            $mayusculas = strtoupper($texto);
            $minusculas = strtolower($texto);

            echo "<h3>Resultados:</h3>";
            echo "Texto original: $texto<br>";
            echo "En mayúsculas: $mayusculas<br>";
            echo "En minúsculas: $minusculas<br>";
        } else {
            echo "Por favor, introduce una cadena de texto válida.";
        }
    }
    ?>
</body>
</html>
