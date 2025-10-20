<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $nota = 10;

        $resultado = ($nota >= 9) ? "Sobresaliente" :
             (($nota >= 6) ? "Aprobado" : "Reprobado");

        echo "La nota es: $resultado";
    ?>
</body>
</html>