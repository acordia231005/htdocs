<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>
    
    <?php
    session_start();
    if (isset($_SESSION["error"])) {
        echo "<p style='color:red;'><strong>".$_SESSION["error"]."</strong></p>";
        unset($_SESSION["error"]);
    }
    ?>

    <h2>Iniciar sesión</h2>
    <form action="2.validacion.php" method="POST">

        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="cine">Selecciona el cine:</label><br>
        <select id="cine" name="cine" >
            <option value="cine_alcores">Cine Alcores</option>
            <option value="los_arcos">Los Arcos</option>
            <option value="cine_nervion">Cine Nervión</option>
        </select>
        <br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>