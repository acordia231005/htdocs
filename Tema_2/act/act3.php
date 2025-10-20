<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>

    <?php 
       $numero = 10;
       var_dump($numero);
       echo "<br>";
       $numero = (float)$numero;
       var_dump($numero);
       echo "<br>";
       $numero = (string)$numero;
       var_dump($numero);
       echo "<br>";
    ?>
</body>
</html>