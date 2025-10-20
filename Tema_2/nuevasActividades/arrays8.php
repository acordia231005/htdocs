<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
    <?php
$frutas = array("Manzana", "Plátano", "Naranja");

if (in_array("Plátano", $frutas)) {
    echo "La fruta 'Plátano' está en el array.";
} else {
    echo "La fruta 'Plátano' no se encuentra en el array.";
}
?>
</body>
</html>