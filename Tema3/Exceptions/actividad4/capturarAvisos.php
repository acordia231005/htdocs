<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Generador de Tabla</title>
</head>
<body>
    <h3>Generador de Tabla HTML</h3>
    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
        $mensaje = strip_tags($_SESSION['mensaje']);
        echo "<h4 style='color=red;'>$mensaje</h4>";
        unset($_SESSION['mensaje']);
    }
    ?>
    <p>Especifica cuántas filas y columnas quieres que tenga la tabla:</p>
    <form action="capturarAvisos_tabla.php" method="POST">
        
        Filas: 
        <input type="number" name="filas"><br>
        Columnas: 
        <input type="number" name="columnas"><br>
        
        <p>Especifica qué posición quieres mostrar:</p>
        
        Fila: 
        <input type="number" name="fila"><br>
        Columna: 
        <input type="number" name="columna"><br>
        
        <input type="submit" value="Generar Tabla">
    </form>
</body>
</html>