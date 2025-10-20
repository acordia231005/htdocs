<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Palabras alfabéticamente</title>
</head>
<body>
    <h2>Ordenar palabras de una frase</h2>

    <form method="post" action="">
        <label for="frase">Introduce tu frase:</label><br>
        <input type="text" id="frase" name="frase" required size="50">
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];

        if (!empty($frase)) {
            $palabras = explode(" ", $frase);

            sort($palabras);

            $frase_ordenada = implode(" ", $palabras);

            echo "<p><strong>Frase original:</strong> $frase</p>";
            echo "<p><strong>Frase ordenada:</strong> $frase_ordenada</p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce una frase válida.</p>";
        }
    }
    ?>
</body>
</html>
