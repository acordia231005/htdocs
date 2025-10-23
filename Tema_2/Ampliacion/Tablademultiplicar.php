<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form method=post>
        <label>Introduce un número:</label>
        <input type="number" name="numero" required min = '1'>
        <button type="submit">Mostrar</button>
    </form>

     <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = (int) $_POST["numero"];

        echo "<h3>Tabla de multiplicar del $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>