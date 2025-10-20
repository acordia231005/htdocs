<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function 5</title>
</head>
<body>
    <?php
function factorial($n) {
    if ($n <= 1) {
        return 1; 
    } else {
        return $n * factorial($n - 1);
    }
}

$numero = 5;
$resultado = factorial($numero);

echo "El factorial de $numero es: $resultado";
?>

</body>
</html>