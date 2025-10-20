<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>

    <?php
       $edad = 60;
       $mayor_menor = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
       echo "La persona es: $mayor_menor";
    ?>
</body>
</html>