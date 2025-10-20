<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
    <?php
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);

$arrayCombinado = array_merge($array1, $array2);

echo "Array combinado:<br>";
print_r($arrayCombinado);
?>
</body>
</html>