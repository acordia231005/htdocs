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
</head>

<body>

    <h1>🎬 Clasificación de películas</h1>

    <?php 

        <!-- ──────────────────────────────────────────
       4. RECORRIDO DE $peliculas Y SALIDA EN TABLA
       ────────────────────────────────────────── -->
        <table>
            <thead>
                <tr>
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

                ?>
                    <tr>
                        <td><?= $pelicula['titulo'] ?></td>
                        <td><?= $pelicula['anio'] ?></td>
                        <td><?= $pelicula['duracion'] ?></td>
                        <td>"><?= $categoria ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    <?php endif; ?>

    <!-- Botón para volver al formulario -->
    <a href="entrada.html" class="btn-volver">← Volver al formulario</a>

</body>

</html>