<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mensaje = "";
    if (ctype_digit($id)) {
        $mensaje "Producto con ID: " . htmlspecialchars($id);
    } else {
        $mensaje$ " Error: el ID debe ser un número.";
    }
} else {
   $mensaje " Error: no se ha proporcionado ningún ID.";
}
?>
