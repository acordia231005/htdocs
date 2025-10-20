<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php   
        $c = 10;
        echo "Valor inicial de \$c: $c<br>";

        $c += 5; 
        echo "Después de += 5: $c<br>";

        $c -= 3; 
        echo "Después de -= 3: $c<br>";

        $c *= 2; 
        echo "Después de *= 2: $c<br>";
      
        $c /= 4; 
        echo "Después de /= 4: $c<br>";

        $c %= 3;
        echo "Después de %= 3: $c<br>";
        ?>
</body>
</html>