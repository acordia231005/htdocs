<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Numeros pares del 1 al 20</title>
</head>
<body>
    <?php

        for ($numero = 1; $numero <= 20; $numero++) {
            if ($numero % 2 == 0) {
                echo "$numero  ";
            }

        }
    ?>

</body>
</html>