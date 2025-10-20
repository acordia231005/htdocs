<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Sumas</title>
</head>
<body>
    <h2>Calculadora de Sumas</h2>

    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required><br><br>

        <button type="submit">Calcular Suma</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if (filter_var($num1, FILTER_VALIDATE_INT) !== false && filter_var($num2, FILTER_VALIDATE_INT) !== false) {
          
            $suma = (int)$num1 + (int)$num2;

            echo "<p>La suma de <strong>$num1</strong> y <strong>$num2</strong> es: <strong>$suma</strong></p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce números enteros válidos.</p>";
        }
    }
    ?>
</body>
</html>
