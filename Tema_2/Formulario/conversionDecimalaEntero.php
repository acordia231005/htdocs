<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversion de Decimal a Entero</title>
</head>
<body>
    <h2>Conversion de Número Decimal a Entero</h2>
    <form method="post">
        <label for="numero">Introduce un número decimal:</label><br>
        <input type="number" step="any" name="numero" id="numero" required><br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if (is_numeric($numero)) {
            $entero = (int)$numero;

            echo "Número entero: $entero";
        } else {
            echo "Por favor, introduce un número válido.";
        }
    }
    ?>
</body>
</html>
