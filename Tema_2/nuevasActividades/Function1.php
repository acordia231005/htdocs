<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    
<?php
function saludar($nombre) {
    return "Hola, $nombre";
}

$mensaje = saludar("Jesus");

echo $mensaje;
?>

</body>
</html>