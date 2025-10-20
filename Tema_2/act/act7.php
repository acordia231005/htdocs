<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
       $Array_cadena_numero= ["Hola", 23];

       echo gettype($Array_cadena_numero);
        echo "<br>";
       if (is_array($Array_cadena_numero)) {
        echo "Es un array\n";
        } elseif (is_string($Array_cadena_numero)) {            
        echo "Es una cadena\n";
        } elseif (is_int($Array_cadena_numero)) {
        echo "Es un entero\n";
    }
    ?>
</body>
</html>