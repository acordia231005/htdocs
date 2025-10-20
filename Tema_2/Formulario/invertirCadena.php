<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $cadena = $_POST['cadena'] ?? '';
        $invertida = "";
        $longitud = strlen($cadena);

        for ($i = $longitud - 1; $i >= 0; $i--) {
            $invertida .= $cadena[$i];
        }

        echo "Cadena original: " . $cadena . "<br>";
        echo "Cadena invertida: " . $invertida;
}
?>
