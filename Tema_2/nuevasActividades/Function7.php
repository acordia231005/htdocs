<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Function7</title>
</head>
<body>

<?php
function imprimir_array($array) {
    foreach ($array as $elemento) {
        echo $elemento . "<br>";
    }
}

$numeros = array(10, 20, 30, 40, 50);

imprimir_array($numeros);
?>
   
</body>
</html>