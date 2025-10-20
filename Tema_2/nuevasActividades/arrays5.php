<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
    <?php
$numeros = array(10, 20, 30);

$numeros[0] = 100;

$numeros[] = 40;

unset($numeros[1]);

echo "Array final:<br>";
print_r($numeros);
?>

</body>
</html>