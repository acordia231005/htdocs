<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Numeros primos</title>
</head>
<body>
    <?php
        $numero = 23;
        $esPrimo = true;

        if ($numero < 2) {
            $esPrimo = false;
        } else {
            for ($i = 2; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $esPrimo = false;
                    break; 
                }
            }
        }

        if ($esPrimo) {
            echo "El número $numero es primo.";
        } else {
            echo "El número $numero no es primo.";
        }
    ?>

</body>
</html>