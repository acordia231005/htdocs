<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $edad = 13;

        $mensaje = ($edad>=18) ? "Mayor de Edad" : "Menor de Edad";
        echo $mensaje;
    ?>
</body>
</html>