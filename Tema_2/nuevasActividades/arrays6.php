<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body>
    <?php
$colores = array("Rojo", "Verde", "Azul", "Amarillo");

unset($colores[2]);

$colores = array_values($colores);

echo "Array reindexado:<br>";
print_r($colores);
?>

</body>
</html>