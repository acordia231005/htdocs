<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 15;

        echo "\$x == \$y: " . ($x == $y ? "true" : "false") . "<br>";
        echo "\$x != \$y: " . ($x != $y ? "true" : "false") . "<br>";
        echo "\$x > \$y: " . ($x > $y ? "true" : "false") . "<br>";
        echo "\$x < \$y: " . ($x < $y ? "true" : "false") . "<br>";
        echo "\$x >= \$y: " . ($x >= $y ? "true" : "false") . "<br>";
        echo "\$x <= \$y: " . ($x <= $y ? "true" : "false") . "<br>";
    ?>
</body>
</html>