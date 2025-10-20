<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Decimal a Entero</title>
</head>
<body>
    <h2>Convertir un número decimal a entero</h2>

    <form method="post">
        <label for="decimal">Introduce un número decimal:</label>
        <input type="text" id="decimal" name="decimal" required>
        <button type="submit">Convertir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = $_POST["decimal"];

        if (is_numeric($decimal)) {
            $entero = (int)$decimal;

            echo "<p>El número decimal <strong>$decimal</strong> convertido a entero es: <strong>$entero</strong></p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce un número válido.</p>";
        }
    }
    ?>
</body>
</html>