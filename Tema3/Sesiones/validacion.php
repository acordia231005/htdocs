<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $_SESSION["mensaje"] = "Debes rellenar el formulario.";
    header("Location: formulario.php");
    exit();

}elseif (empty($_POST['nombre']) || empty($_POST['apellidos']
            || empty($_POST['direccion']) || empty($_POST['poblacion']) 
            || empty($_POST['genero']))) {

     $_SESSION["mensaje"] = "Debes completar los campos del formulario.";
    header("Location: formulario.php");
    exit();

}elseif(empty($_POST['acepto'])){

     $_SESSION["mensaje"] = "Debes aceptar los terminos y condiciones.";
    header("Location: formulario.php");
    exit();
    
}elseif(!preg_match('/^[a-zA-Z0-9]+$/',$_POST['poblacion'])){

    $_SESSION["mensaje"] = "Debes poner un publo real.";
    header("Location: formulario.php");
    exit();

}else{
    $_SESSION["nombre"] = htmlspecialchars($_POST['nombre']);
    $_SESSION["apellidos"] = htmlspecialchars($_POST['apellidos']);
    $_SESSION["direccion"] = htmlspecialchars($_POST['direccion']);
    $_SESSION["poblacion"] = htmlspecialchars($_POST['poblacion']);
    $_SESSION["genero"] = htmlspecialchars($_POST['genero']);
    header("Location: formulario.php");
    exit();
}