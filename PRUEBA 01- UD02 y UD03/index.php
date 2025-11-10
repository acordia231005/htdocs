<?php
   //Constante.
    define('IVA', 0.21);
   
    //Variables.
    $nombreProducto = "Portatil";
    $precioUnit = 49.90;
    $unidadesVenta = 3;
    $descuento = 0.10;
    $moneda = "$";

    //Calculo del importe base.
    $importeBase = $precioUnit * $unidadesVenta;

    //Calcular IVA
    $ivaCalculado = $importeBase * IVA ;

    //Calcular importe de iva aplicado.
    $importeIva = $importeBase + $ivaCalculado;

    //Calcular descuento.
    $descuentoCalculo = $importeIva * $descuento;

    //Calcular importe final con descuento.
    $importeFinal = $importeBase + $ivaCalculado - $descuentoCalculo ;

    //Creo la funcion linea para imprimir los datos.
    function linea($etiqueta, $valor){
        echo "<p><strong> $etiqueta : </strong> $valor $</p>";
    }

    //A partir de aqui mostrare los datos.
    echo "<h1><strong>Resumen de pedido: Teclado mecánico</strong></h1>";
    linea("Importe base", number_format($importeBase, 2));
    linea("Iva (21%)", number_format($ivaCalculado, 2));
    linea("Importe con IVA", number_format($importeIva, 2));
    linea("Descuento (10%)", number_format($descuentoCalculo, 2));
    linea("ImporteFinal", number_format($importeFinal, 2));
?>