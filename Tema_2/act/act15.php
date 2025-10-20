<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
  define("VERSION", "1.0");

    echo defined("VERSION") 
     ? "Constante definida: " . VERSION 
     : "Constante no definida";
    ?>
</body>
</html>