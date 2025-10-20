<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluar</title>
</head>
<body>
    <?php
        $nota = 8.5; 

        switch (true) {
            case $nota < 0 || $nota > 10:
                echo "La nota no es válida. Debe estar entre 0 y 10.";
                break;
            case $nota < 5:
                echo "El estudiante ha suspendido.";
                break;
            case $nota < 7:
                echo "El estudiante ha aprobado.";
                break;
            case $nota < 9:
                echo "El estudiante tiene un notable.";
                break;
            case $nota <= 10:
                echo "El estudiante tiene un sobresaliente.";
                break;
        }
    ?>
</body>
</html>