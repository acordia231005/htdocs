<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php
function ordenar_personalizado($array, $orden = "ascendente") {
    // Verificar tipo de orden
    if ($orden === "descendente") {
        rsort($array); 
    } else {
        sort($array);  
    }

    print_r($array);

    return $array;
}
?>

</body>
</html>