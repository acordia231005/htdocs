<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Excepciones</title>
</head>
<body>
    <?php

    function validarEdad($edad){
        if ($edad < 18) {
            throw new exception("Edad insuficiente para acceder.");
        }
        return true;
    }

    function manejadorErrores($errno, $errstr, $errfile, $errline) {
    echo "Ocurrió el error: $errstr en el archivo $errfile en la línea $errline <br>";
    $mensaje = "Error: [$errno] $errstr - Archivo: $errfile, Linea : $errline";
    error_log($mensaje , 3, "errores.log");
    exit;
}


    try{
        set_error_handler("manejadorErrores");
        $a = $b; 
        if(isset($_POST['edad'])) {
        $edad = (int)$_POST['edad'];
        validarEdad($edad);
        echo "La edad es: " . $edad;
      }
    }catch(Exception $ex){
        echo "Error: " . $ex->getMessage();
    }
    
    ?>
<form method="post">
    <input type="edad" name="edad" required>
    <input type="submit" value="Enviar" required>
</form>
</body>
</html>