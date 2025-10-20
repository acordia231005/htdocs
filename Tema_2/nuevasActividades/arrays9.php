<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
    <?php
    
$producto = array(
    "nombre" => "Portátil",
    "precio" => 850,
    "stock" => 25
);

$claves = array_keys($producto);

echo "Claves del array:<br>";
print_r($claves);
?>

</body>
</html>