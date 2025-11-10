<?php
if (isset($_GET['cantidad'])) {
    $cantidad = intval($_GET['cantidad']);
        if ($cantidad <= 0) {
            echo "<p>Por favor, introduce una cantidad positiva.</p>";
        } else {
            $denominaciones = [
                "billete de 500" => 500,
                "billete de 200" => 200,
                "billete de 100" => 100,
                "billete de 50"  => 50,
                "billete de 20"  => 20,
                "billete de 10"  => 10,
                "billete de 5"   => 5,
                "moneda de 2"    => 2,
                "moneda de 1"    => 1
            ];
            echo "<h2>Descomposición para $cantidad €:</h2>";
            foreach ($denominaciones as $nombre => $valor) {
                $num = intdiv($cantidad, $valor); 
                $cantidad = $cantidad % $valor;   
                echo "$num $nombre €<br>";
            }
        }
    } else {
        echo "<p>Por favor, introduzca la cantidad.</p>";
    }
?>