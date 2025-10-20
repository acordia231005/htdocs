<!DOCTYPE html>
<html>
<head>
    <title>Prueba de PHP</title>
</head>
<body>
    <?php
        $edad = 20;
        $tiene_licencia = true;
        $conduce;

        if($edad >=18 && $tiene_licencia){
            $conduce = true;
            echo "La persona puede conducir";
        } else {
            echo "La persona no puede conducir";
        }
    ?>
</body>
</html>