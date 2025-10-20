<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
</head>
<body>
    <?php
        $numero = 0;

        switch ($numero != NAN) {
            case $numero === 0:
                echo "Este numero es Cero";
                break;
            
            case $numero < 0:
                echo "Este numero es Negativo";
                break;

            default:
                echo "Este numero es Positivo";
                break;
        }
        
    ?>
</body>
</html>