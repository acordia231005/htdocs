<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>estadisticasArray</title>
</head>
<body>
    

<?php
function estadisticasArray($numeros) {
    $min = min($numeros);
    $max = max($numeros);
    $media = array_sum($numeros) / count($numeros);

    return array(
        "minimo" => $min,
        "maximo" => $max,
        "media" => $media
    );
}

$numeros = array(5, 12, 3, 8, 20, 7, 1, 15, 9, 6);

$resultados = estadisticasArray($numeros);

echo "<p>Array original: " . implode(", ", $numeros) . "</p>";
echo "<p>Número mínimo: " . $resultados["minimo"] . "</p>";
echo "<p>Número máximo: " . $resultados["maximo"] . "</p>";
echo "<p>Media: " . $resultados["media"] . "</p>";

?>

</body>
</html>