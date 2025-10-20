<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function presentar($nombre, $ciudad = "Madrid") {
    return "Hola, mi nombre es $nombre y vivo en $ciudad.";
}

echo presentar("Carlos", "Barcelona") . "<br>";
echo presentar("Ana");
?>
    
</body>
</html>