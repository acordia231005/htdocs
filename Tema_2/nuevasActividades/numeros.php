<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
</head>
<body>
    <?php
        $numero = 0;

        if (is_nan($numero)) {
            echo "El valor no es un número válido.";
        } elseif ($numero === 0) {
            echo "Este número es Cero";
        } elseif ($numero < 0) {
            echo "Este número es Negativo";
        } else {
            echo "Este número es Positivo";
        }
    ?>
</body>
</html>