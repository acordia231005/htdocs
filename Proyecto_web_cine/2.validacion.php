<?php
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Acceso no permitido. El formulario debe ser enviado por POST.");
    }

    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $email = trim($_POST["email"]);
    $cine = trim($_POST["cine"]);

    $personas = [
    "Antonio" => "erchulo",
    "Noelia" => "lguapa",
    "Pepe" => "elpsao",
    "Sofia" => "lalista"
    ];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El formato del correo electrónico no es válido.");
    }

    if (!array_key_exists($usuario, $personas) || $personas[$usuario] !== $password) {
        throw new Exception("Usuario o contraseña incorrectos.");
    }

    $_SESSION["usuario"] = $usuario;
    $_SESSION["password"] = $password;
    $_SESSION["email"] = $email;
    
    setcookie("cine", $cine, time() + 3600 * 24);

    echo "<h2>Bienvenido $usuario</h2>";
    echo "<p>Sesión iniciada correctamente.</p>";
    echo "<p>Cine seleccionado: $cine</p>";

    header("Refresh: 2; URL=3.asientos.php");

}catch(exception $e){
    $_SESSION["error"] = $e->getMessage();
    header("Location: 1.inicio.php");
    exit();
}