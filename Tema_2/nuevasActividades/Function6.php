<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function6</title>
</head>
<body>

<?php
function sumar(...$numeros) {
    return array_sum($numeros);
}

$resultado = sumar(2, 5, 10, 3);

echo "La suma de los números es: $resultado";
?>
    
</body>
</html>