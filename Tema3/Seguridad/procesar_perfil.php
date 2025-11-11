<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $nombre)) {
            echo "Error: el nombre no es correcto.";
            exit();
    }
    elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "Error: el email no se correcto.";
            exit();
    }
        echo "<h3>Datos del usuario:</h3>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Correo electrónico: " . htmlspecialchars($correo);
}