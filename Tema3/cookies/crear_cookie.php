<?php

if (isset($_POST['nombre'])) {
   
    $nombre = htmlspecialchars($_POST['nombre']);
    setcookie('usuario', $nombre, time()+3600);

    header("Location: bienvenida_cookie.php");
}
