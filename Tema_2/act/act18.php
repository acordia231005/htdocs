<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        function doblar($n){
            return $n * 2;
        }

        $numero = 4400;
        $resultado = doblar($numero);
        echo "El doble de $numero es: $resultado";
        ?>
</body>
</html>