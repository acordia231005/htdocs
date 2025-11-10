<?php
session_start();

if (empty($_POST['nombre']) || empty($_POST['apellidos'])
            || empty($_POST['direccion']) || empty($_POST['poblacion']) 
            || empty($_POST['genero'])) {

     $_SESSION["mensaje"] = "Debes completar los campos del formulario.";
    header("Location: formulario.php");
    exit();

}

$mensajeBienvenida = ($genero == "Masculino") ? "!Bienvenido" : "!Bienvenida";

echo "<h2>$mensajeBienvenida $nombre $apellidos</h2>";
echo "<p> Direccion: $direccion</p>";
echo "<p> Poblacion: $poblacion</p>";
?>
