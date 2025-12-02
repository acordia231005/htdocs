<?php
include "clases.php";
session_start();
if (isset($_POST["nombre"], $_POST["telefono"], $_POST["correo"])) {

    $nombre = strip_tags(trim($_POST["nombre"]));
    $telefono = strip_tags(trim($_POST["telefono"])) ;
    $email = filter_var($_POST["correo"],FILTER_SANITIZE_EMAIL);

    $contacto = new Contacto($nombre ,$telefono,$email);
    
    if(isset($_SESSION["agenda"])) {
//        $agenda = $_SESSION["agenda"];
//        $agenda->addContacto($contacto);
        $_SESSION["agenda"]->addContacto($contacto);
    }else{
        $agenda = new Agenda();
        $agenda->addContacto($contacto);
        $_SESSION["agenda"] = $agenda;
    }

} 

header("location:agenda.php");
exit();