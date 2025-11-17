<?php
$log_file = 'errores.log';

function registrar_error($mensaje) {
    global $log_file;
    $fecha = date("Y-m-d H:i:s");
   error_log("[$fecha] $mensaje\n", 3, $log_file);
}

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Acceso no permitido. El formulario debe ser enviado por POST.");
    }

    if (!isset($_POST['figura'])) {
        throw new Exception("No se seleccionó ninguna figura.");
    }
    
    $figura = $_POST['figura'];

    if ($figura === "circulo") {
        if (!isset($_POST['radio']) || !is_numeric($_POST['radio']) || $_POST['radio'] <= 0) {
                throw new Exception("El valor del radio no es válido. Debe ser un número positivo.");
        }
        $radio = floatval($_POST['radio']);
        $area = pi() * $radio * $radio;
        echo "El área del círculo es: " . $area;
    } elseif ($figura === "triangulo") {
        if (!isset($_POST['base']) || !is_numeric($_POST['base']) || $_POST['base'] <= 0) {
            throw new Exception("El valor de la base no es válido. Debe ser un número positivo.");
        }
        if (!isset($_POST['altura']) || !is_numeric($_POST['altura']) || $_POST['altura'] <= 0) {
            throw new Exception("El valor de la altura no es válido. Debe ser un número positivo.");
        }
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);
        $area = ($base * $altura) / 2;
        echo "El área del triángulo es: " . $area;
    } else {
        throw new Exception("La figura seleccionada ('$figura') no es reconocida.");
    }
} catch (Exception $e) {
    $error_message = $e->getMessage();
    registrar_error($error_message); 
    echo "Error: " . $error_message; 
}
?>