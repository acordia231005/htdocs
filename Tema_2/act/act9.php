<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $variable = "123.45abc";
        echo "Valor original: $variable (Tipo: " . gettype($variable) . ")<br>";

        $floatVar = (float)$variable;
        echo "Valor como flotante: $floatVar (Tipo: " . gettype($floatVar) . ")<br>";

        $intVar = (int)$variable;
        echo "Valor como entero: $intVar (Tipo: " . gettype($intVar) . ")<br>";

        $boolVar = (bool)$variable;
        echo "Valor como booleano: " . ($boolVar ? 'true' : 'false') . " (Tipo: " . gettype($boolVar) . ")<br>";
    ?>
</body>
</html>