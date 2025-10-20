<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>

    <?php
        define("PI", 3.1416);
        $radio = 5;
        $radioCuadrado = $radio * $radio;
        $area = PI * $radioCuadrado;
        echo "El área de un círculo con radio $radio es $area.";
    ?>
</body>
</html>