<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function5</title>
</head>
<body>
    <?php
function incrementar(&$valor) {
    $valor += 10;
}

$numero = 5;

incrementar($numero);

echo "El valor después de incrementar es: $numero";
?>

</body>
</html>