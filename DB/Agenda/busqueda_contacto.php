<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentralos por su nombre</title>
</head>
<body>
    <h1>Encuentra el telefono de tu contacto por el nombre</h1>
    <form action="procesar_busqueda.php" method="post">
        <label for="nombre">Nombre del contacto:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>