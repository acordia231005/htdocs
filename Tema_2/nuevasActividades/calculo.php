<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculo</title>
</head>
<body>
    <?php
        $precioUnitario = 15 ;
        $cantidad = 25 ;

        $multiplicacion = $precioUnitario * $cantidad ;

        printf(
            "El resultado de la multiplicación de %d y %d es %.2f",
            $precioUnitario,
            $cantidad,
            $multiplicacion
        );
    ?>
</body>
</html>