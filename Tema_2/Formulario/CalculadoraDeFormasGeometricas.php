<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Geométrica </title>
</head>
<body>
    <h2>Calculadora de Formas Geométricas</h2>
    <form method="post" action="">
        <label for="radio">Introduce el radio:</label>
        <input type="number" name="radio" id="radio" step="any" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST["radio"];

        if (is_numeric($radio) && $radio > 0) {
            $longitud = 2 * M_PI * $radio;
            $superficie = M_PI * pow($radio, 2);
            $volumen = (4 / 3) * M_PI * pow($radio, 3);

            $longitud_redondeada = round($longitud, 2);
            $superficie_redondeada = round($superficie, 2);
            $volumen_redondeado = round($volumen, 2);

            echo "<h3>Resultados:</h3>";
            echo "Radio ingresado: $radio<br><br>";
            echo "Longitud de la circunferencia (L = 2 × π × r): $longitud_redondeada<br>";
            echo "Superficie del círculo (S = π × r²): $superficie_redondeada<br>";
            echo "Volumen de la esfera (V = 4/3 × π × r³): $volumen_redondeado<br><br>";
        } else {
            echo "Por favor, introduce un número válido mayor que cero.";
        }
    }
    ?>
</body>
</html>
