<?php
/*
 * clasificar.php
 * Procesa los datos enviados desde entrada.html y muestra
 * una tabla con la categoría asignada a cada película.
 */

/* ─────────────────────────────────────────────
   1. RECUPERACIÓN DE LOS ARRAYS DEL FORMULARIO
   ───────────────────────────────────────────── */

// Recogemos los tres arrays enviados por POST
// Si no llegan datos, usamos arrays vacíos para evitar errores
$titulos   = isset($_POST['titulo'])   ? $_POST['titulo']   : [];
$anios     = isset($_POST['anio'])     ? $_POST['anio']     : [];
$duraciones = isset($_POST['duracion']) ? $_POST['duracion'] : [];

/* ─────────────────────────────────────────────
   2. CONSTRUCCIÓN DEL ARRAY ASOCIATIVO $peliculas
   Cada elemento contiene: titulo, anio, duracion
   ───────────────────────────────────────────── */

$peliculas = [];

// Recorremos los índices comunes a los tres arrays
for ($i = 0; $i < count($titulos); $i++) {
    $peliculas[] = [
        'titulo'   => htmlspecialchars(trim($titulos[$i])),  // Sanitizamos el texto
        'anio'     => (int) $anios[$i],                      // Convertimos a entero
        'duracion' => (int) $duraciones[$i]                  // Convertimos a entero
    ];
}

/* ─────────────────────────────────────────────
   3. FUNCIÓN DE CLASIFICACIÓN
   determinarCategoria($anio, $duracion)
   Devuelve una cadena con la categoría de la película
   según su año de estreno y su duración en minutos.
   ───────────────────────────────────────────── */

function determinarCategoria(int $anio, int $duracion): string
{
    // Categoría 1: película reciente Y de larga duración
    if ($anio >= 2023 && $duracion > 120) {
        return "Estreno Imperdible";
    }

    // Categoría 2: película antigua (año 2000 o anterior)
    if ($anio <= 2000) {
        return "Clásico Reconocido";
    }

    // Categoría 3: cualquier otro caso
    return "Contenido General";
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Clasificación de películas</title>
    <style>
        /* Estilos generales de la página */
        body {
            font-family: sans-serif;
            max-width: 860px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        h1 {
            color: #222;
        }

        /* Tabla de resultados */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 1rem;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: .6rem 1rem;
            text-align: left;
        }

        thead th {
            background: #333;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background: #f9f9f9;
        }

        /* Colores por categoría */
        .estreno {
            color: #0a7c2e;
            font-weight: bold;
        }

        .clasico {
            color: #7c4a0a;
            font-weight: bold;
        }

        .general {
            color: #1a4a8a;
        }

        /* Botón de vuelta */
        .btn-volver {
            display: inline-block;
            margin-top: 1.5rem;
            padding: .5rem 1.2rem;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-volver:hover {
            background: #555;
        }

        /* Mensaje de error cuando no hay datos */
        .aviso {
            padding: 1rem;
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <h1>🎬 Clasificación de películas</h1>

    <?php if (empty($peliculas)): ?>

        <!-- Mensaje si el formulario llega vacío -->
        <p class="aviso">
            No se han recibido datos. Por favor, rellena el formulario de
            <a href="entrada.html">entrada de películas</a>.
        </p>

    <?php else: ?>

        <!-- ──────────────────────────────────────────
       4. RECORRIDO DE $peliculas Y SALIDA EN TABLA
       ────────────────────────────────────────── -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Duración (min)</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Recorremos cada película del array asociativo
                foreach ($peliculas as $indice => $pelicula):

                    // Llamamos a la función para obtener la categoría
                    $categoria = determinarCategoria($pelicula['anio'], $pelicula['duracion']);

                    // Asignamos una clase CSS según la categoría para colorear la celda
                    if ($categoria === "Estreno Imperdible") {
                        $clase = "estreno";
                    } elseif ($categoria === "Clásico Reconocido") {
                        $clase = "clasico";
                    } else {
                        $clase = "general";
                    }
                ?>
                    <tr>
                        <td><?= $indice + 1 ?></td>
                        <td><?= $pelicula['titulo'] ?></td>
                        <td><?= $pelicula['anio'] ?></td>
                        <td><?= $pelicula['duracion'] ?></td>
                        <td class="<?= $clase ?>"><?= $categoria ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        <!-- Leyenda de categorías -->
        <p style="margin-top:1rem; font-size:.9rem; color:#555;">
            <strong>Leyenda:</strong>
            <span class="estreno">Estreno Imperdible</span> (≥ 2023 y &gt; 120 min) &nbsp;|&nbsp;
            <span class="clasico">Clásico Reconocido</span> (≤ 2000) &nbsp;|&nbsp;
            <span class="general">Contenido General</span> (resto)
        </p>

    <?php endif; ?>

    <!-- Botón para volver al formulario -->
    <a href="entrada.html" class="btn-volver">← Volver al formulario</a>

</body>

</html>