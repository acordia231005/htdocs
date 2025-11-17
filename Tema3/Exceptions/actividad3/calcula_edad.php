<?php

function registrar_error($mensaje) {
    global $log_file;
    $fecha = date("Y-m-d H:i:s");
   error_log("[$fecha] $mensaje\n", 3, "errores_acceso.log");
}

try {

  if ($_SERVER['request_method'] === 'post') {
  
    $edad = $_POST['edad'];

    if(is_numeric($edad) && $edad >= 18){
        echo "Eres mayo de edad. Puedes entrar."
    }else {
        echo "Eres menor de edad. Acceso denegado"
    }
}
} catch (exception $ex) {
    echo $ex -> getmessage();
    registrarError($ex -> getmessage());
}
    