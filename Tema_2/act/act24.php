<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $es_mayor = true;
        $es_estudiante = false;

        echo "\$es_mayor && \$es_estudiante: " . ($es_mayor && $es_estudiante ? "true" : "false") . "<br>";

        echo "\$es_mayor || \$es_estudiante: " . ($es_mayor || $es_estudiante ? "true" : "false") . "<br>";

        echo "! \$es_mayor: " . (!$es_mayor ? "true" : "false") . "<br>";
        echo "! \$es_estudiante: " . (!$es_estudiante ? "true" : "false") . "<br>";
    ?>
</body>
</html>