<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Geométrica</title>
</head>
<body>
    <h2>Calculadora de Formas Geométricas</h2>

    <form method="post" action="">
        <label for="radio">Introduce el radio:</label>
        <input type="text" id="radio" name="radio" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST["radio"];

        if (is_numeric($radio) && $radio > 0) {
            $r = (float)$radio;

            $longitud = 2 * pi() * $r;

            $superficie = pi() * pow($r, 2);

            $volumen = (4/3) * pi() * pow($r, 3);

            $longitud = round($longitud, 2);
            $superficie = round($superficie, 2);
            $volumen = round($volumen, 2);

            echo "<h3>Resultados para radio = $r</h3>";
            echo "<p><strong>Longitud de la circunferencia:</strong> $longitud</p>";
            echo "<p><strong>Superficie del círculo:</strong> $superficie</p>";
            echo "<p><strong>Volumen de la esfera:</strong> $volumen</p>";
        } else {
            echo "<p style='color:red;'>Por favor, introduce un número positivo válido para el radio.</p>";
        }
    }
    ?>
</body>
</html>
