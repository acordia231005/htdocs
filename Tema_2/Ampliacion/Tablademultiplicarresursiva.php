<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar (Recursiva)</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form method="post">
        <label>Introduce un número:</label>
        <input type="number" name="numero" required min='1'>
        <button type="submit">Mostrar</button>
    </form>

    <?php
    function mostrarTabla($numero, $multiplicador = 1) {
        if ($multiplicador > 10) {
            return; 
        }
        echo "$numero x $multiplicador = " . ($numero * $multiplicador) . "<br>";
        mostrarTabla($numero, $multiplicador + 1); 
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = (int) $_POST["numero"];

        echo "<h3>Tabla de multiplicar del $numero:</h3>";
        mostrarTabla($numero);
    }
    ?>
</body>
</html>
