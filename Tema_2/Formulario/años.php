<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula años</title>
</head>
<body>
    

    <?php
        $edad = intval($_GET['edad']);
        $edad10Mas = $edad + 10;
        $edad10Menos = $edad - 10;
        $yearActual = date("Y");
        $year10Mas = $yearActual + 10;
        $year10Menos = $yearActual - 10;

        $yearParaJubilarse = 67 - $edad;
        $yearJubilacion = $yearActual + $yearParaJubilarse;




        echo "Edad Actual: $edad años. <br>";
        echo "Edad hace 10 años: $edad10Mas años.<br>";
        echo "Edad que tenias hace 10 años: $edad10Menos años.<br>";
        echo "Año en el q estaras dentro de 10 años: $year10Mas <br>";
        echo "Año en el que estuviste hace 10 años: $year10Menos <br>";
        echo "Año de su jubilacion: $yearJubilacion <br>";
    ?>
</body>
</html>