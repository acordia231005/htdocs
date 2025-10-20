<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $a = 5;

        echo "Pre-incremento: " . (++$a) . "<br>";
        echo "Post-incremento: " . ($a++) . "<br>";

        echo "Valor final de \$a después del post-incremento: $a";
    ?>
</body>
</html>