<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        function sumar($a, $b){
            return $a + $b;
        }
        $n1 = 3;
        $n2 = 7;

        $resultado = sumar($n1, $n2) * 2;

        echo "El doble de la suma de $n1 y $n2 es: $resultado";
    ?>
</body>
</html>