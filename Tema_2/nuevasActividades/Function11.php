<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function11</title>
</head>
<body>
    <?php
function calcular_inventario($productos) {
    $total = 0;

    foreach ($productos as $producto) {
        if (isset($producto["precio"]) && isset($producto["cantidad"])) {
            $total += $producto["precio"] * $producto["cantidad"];
        }
    }

    return $total;
}
$productos = [
    ["nombre" => "Laptop", "precio" => 1000, "cantidad" => 5],
    ["nombre" => "Teclado", "precio" => 50, "cantidad" => 30],
    ["nombre" => "Mouse", "precio" => 25, "cantidad" => 50],
];

$valor_total = calcular_inventario($productos);

echo "El valor total del inventario es: $" . $valor_total;
?>
</body>
</html>