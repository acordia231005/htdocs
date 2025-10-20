<?php

    $titulo = "Mi Perfil en PHP";

    $nombre = "Andrés José Cortés Díaz"; 

    $fecha = date("d/m/Y"); 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>

    <p>Mi nombre es <?php echo $nombre; ?>.</p>

    <footer>
        Fecha actual: <?php echo $fecha; ?>
    </footer>
</body>
</html>
