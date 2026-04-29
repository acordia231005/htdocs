<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pronóstico de Clima</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 760px;
            margin: 2rem auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 1rem;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: .6rem 1rem;
            text-align: center;
        }

        thead th {
            background: #2c3e50;
            color: #fff;
        }

        .calido {
            color: #c0392b;
            font-weight: bold;
        }

        .templado {
            color: #e67e22;
            font-weight: bold;
        }

        .frio {
            color: #2980b9;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 1.2rem;
            padding: .5rem 1.2rem;
            background: #2c3e50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1>🌤️ Pronóstico de Clima</h1>

    <?php
    /* ─────────────────────────────────────────────────────
       FUNCIÓN 1: calcular_media()
       Recibe un array de temperaturas y devuelve la media.
       Usa array_sum() para sumar todos los elementos y
       count() para obtener el número de elementos.
    ───────────────────────────────────────────────────── */
    function calcular_media(array $temperaturas): float
    {
        $total = array_sum($temperaturas);   // Suma de todas las temperaturas
        return $total / count($temperaturas); // Media = suma / número de días
    }

    /* ─────────────────────────────────────────────────────
       FUNCIÓN 2: determinar_pronostico()
       Recibe la media calculada y devuelve una cadena
       con el pronóstico según los umbrales definidos:
         >= 25°C  → Cálido
         15-24.99 → Templado
         <  15°C  → Frío
    ───────────────────────────────────────────────────── */
    function determinar_pronostico(float $media): string
    {
        if ($media >= 25) {
            return "Cálido";       // Temperatura alta
        } elseif ($media >= 15) {
            return "Templado";     // Temperatura moderada
        } else {
            return "Frío";         // Temperatura baja
        }
    }

    /* ─────────────────────────────────────────────────────
       RECOGIDA DE DATOS Y ALMACENAMIENTO EN ARRAY
       Los cinco valores del formulario se guardan en un
       array indexado $temperaturas, facilitando su
       recorrido con un bucle.
    ───────────────────────────────────────────────────── */
    $temperaturas = [
        (float) $_POST['dia1'],
        (float) $_POST['dia2'],
        (float) $_POST['dia3'],
        (float) $_POST['dia4'],
        (float) $_POST['dia5']
    ];

    // Calculamos la media llamando a la función
    $media = calcular_media($temperaturas);

    // Determinamos el pronóstico llamando a la función
    $pronostico = determinar_pronostico($media);

    // Clase CSS para colorear la celda según el pronóstico
    $clase = match ($pronostico) {
        "Cálido"   => "calido",
        "Templado" => "templado",
        default    => "frio"
    };

    /* ─────────────────────────────────────────────────────
       SALIDA: TABLA HTML
       Usamos un bucle foreach para recorrer el array
       $temperaturas y generar una celda <td> por cada día.
    ───────────────────────────────────────────────────── */
    echo "<table>";

    // Cabecera con los días
    echo "<thead><tr>";
    for ($dia = 1; $dia <= count($temperaturas); $dia++) {
        echo "<th>Día $dia</th>";  // Bucle for para los encabezados
    }
    echo "<th>Media</th><th>Pronóstico</th>";
    echo "</tr></thead>";

    // Fila de datos
    echo "<tbody><tr>";

    // Bucle foreach para recorrer el array de temperaturas
    foreach ($temperaturas as $temp) {
        echo "<td>" . number_format($temp, 1) . "°C</td>";
    }

    // Celda de la media
    echo "<td><strong>" . number_format($media, 2) . "°C</strong></td>";

    // Celda del pronóstico con clase CSS según resultado
    echo "<td class='$clase'>$pronostico</td>";

    echo "</tr></tbody></table>";
    ?>

    <a href="index.html" class="btn">← Volver al formulario</a>
</body>

</html>