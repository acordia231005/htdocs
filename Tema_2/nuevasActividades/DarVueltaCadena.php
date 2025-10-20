<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Invertir Cadena</title>
</head>
<body>
    <h2>Invertir una Cadena</h2>

    <form method="post" action="">
        <label for="texto">Introduce tu cadena:</label><br>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Invertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["texto"];

        if (!empty($cadena)) {
            $invertida = "";
            $longitud = strlen($cadena);

            for ($i = $longitud - 1; $i >= 0; $i--) {
                $invertida .= $cadena[$i]; 
                 }

            echo "<p><strong>Cadena original:</strong> $cadena</p>";
            echo "<p><strong>Cadena invertida:</strong> $invertida</p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce una cadena válida.</p>";
        }
    }
    ?>
</body>
</html>