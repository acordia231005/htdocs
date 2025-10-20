<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST['nombre'] ?? '';
        $apellidos = $_POST['apellidos'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $sexo = $_POST['sexo'] ?? '';
        $profesion = $_POST['profesion'] ?? '';
        $aficiones = $_POST['aficiones'] ?? [];
        $herramienta = $_POST['herramienta'] ?? '';
        $comentario = $_POST['comentario'] ?? '';

        echo "<h2>Datos recibidos:</h2>";
        echo "Nombre: $nombre<br>";
        echo "Apellidos: $apellidos<br>";
        echo "Email: $email<br>";
        echo "Contraseña: $password<br>";
        echo "Sexo: $sexo<br>";
        echo "Profesión: $profesion<br>";

        echo "Aficiones: ";
        if (!empty($aficiones)) {
            echo implode(", ", $aficiones);
        } else {
            echo "Ninguna";
        }
        echo "<br>";

        echo "Herramienta preferida: $herramienta<br><br>";
        echo "Comentario:<br>" . nl2br($comentario);

    } else {

        echo "No se recibieron datos del formulario.";

    }
?>