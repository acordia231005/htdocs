<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar Vocales</title>
</head>
<body>
    <?php

        $cadena = "Hola Mundo";

        $cadena = strtolower($cadena);

        $caracteres = str_split($cadena);

        $vocales = ['a', 'e', 'i', 'o', 'u'];

        $contador = 0;

        foreach ($caracteres as $letra) {
            if (in_array($letra, $vocales)) {
                $contador++;
            }
        }

        echo "La cadena '$cadena' tiene $contador vocal(es).";
    ?>
</body>
</html>