<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<?php
    $datos = array(
        "frutas" => array("Manzana", "Plátano", "Naranja"),
        "vehiculos" => array("Coche", "Moto", "Bicicleta")
    );

    echo "Una fruta: " . $datos["frutas"][1] . "<br>";
    echo "Un vehículo: " . $datos["vehiculos"][2] . "<br>";
?>


</body>
</html>