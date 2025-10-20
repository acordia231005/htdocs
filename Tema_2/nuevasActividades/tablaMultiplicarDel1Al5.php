<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas de multiplicar del 1 al 5</title>
</head>
<body>
    <?php

for ($i = 1; $i <= 5; $i++) {
    echo "<h3>Tabla del $i</h3>";
    
    $j = 1; 
    while ($j <= 10) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado<br>";
        $j++;
    }

    echo "<br>"; 
}
?>

</body>
</html>