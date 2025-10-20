<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php

    define("SALUDO", "Hola, Mundo!");

    function mostrarSaludo() {
        echo SALUDO;
    }

    mostrarSaludo();

    ?>
</body>
</html>