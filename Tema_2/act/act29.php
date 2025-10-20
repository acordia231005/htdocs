<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $cadena = "5";
        $entero = 5;

        $comparacion_estricta = ($cadena === $entero) ? "Verdadero" : "Falso";

        $comparacion_flexible = ($cadena == $entero) ? "Verdadero" : "Falso";

        echo "Comparación estricta (===): $comparacion_estricta\n";
        echo "<br>";
        echo "Comparación flexible (==): $comparacion_flexible\n";
    ?>

    
</body>
</html>