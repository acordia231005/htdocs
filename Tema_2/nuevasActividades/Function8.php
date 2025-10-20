<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function8</title>
</head>
<body>


<?php
function obtener_informacion_usuario() {
    return array(
        "nombre" => "Carlos",
        "edad" => 28
    );
}

$usuario = obtener_informacion_usuario();

echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"];
?>

    
</body>
</html>