<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
    define(CONSTANTE, 10);
   $variable = 10;
    echo "El valor de la constante es: " . CONSTANTE;
    echo "<br>";
    echo "El valor de la variable es: " . $variable;
    echo "<br>";

    $variable++;
    echo "El valor de la constante es: " . CONSTANTE;
    echo "<br>";
    echo "El valor de la variable incrementada es: " . $variable;
    ?>
</body>
</html>