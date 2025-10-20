<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manipulación de Fechas en PHP</title>
</head>
<body>
    <h2>Manipulando Fechas: Hoy, Ayer y Mañana</h2>

    <?php
    $hoy = date("d-m-Y");
    $ayer = date("d-m-Y", strtotime("-1 day"));
    $manana = date("d-m-Y", strtotime("+1 day"));
    
    echo "<p>Hoy: $hoy</p>";
    echo "<p>Ayer:$ayer</p>";
    echo "<p>Mañana: $manana</p>";
    ?>
</body>
</html>
