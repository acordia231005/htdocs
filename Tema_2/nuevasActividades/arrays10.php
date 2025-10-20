<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
    <?php
    
$numeros = array(1, 2, 3, 4, 5);

$mayores = array_filter($numeros, function($num) {
    return $num > 3;
});

echo "Números mayores a 3:<br>";
print_r($mayores);
?>

</body>
</html>