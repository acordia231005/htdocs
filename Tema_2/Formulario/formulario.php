<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <h2>Formulario de registro</h2>
    <form action="formulario1.php" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>

        <label>Apellidos: </label>
        <input type="text" name="apellidos"><br><br>

        <label>e-mail: </label>
        <input type="email" name="email"><br><br>

        <label>Contraseña: </label>
        <input type="password" name="password"><br><br>

        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="Hombre"> Hombre<br>
        <input type="radio" name="sexo" value="Mujer"> Mujer<br><br>

        <label>Profesión:</label><br>
        <input type="radio" name="profesion" value="Front-end"> Front-end<br>
        <input type="radio" name="profesion" value="Back-end"> Back-end<br>
        <input type="radio" name="profesion" value="Full stack"> Full stack<br><br>

        <label>Aficiones:</label><br>
        <input type="checkbox" name="aficiones[]" value="Ciencia"> Ciencia<br>
        <input type="checkbox" name="aficiones[]" value="Informatica"> Informatica<br>
        <input type="checkbox" name="aficiones[]" value="Deportes"> Deportes<br><br>

        <label>Elija la herramienta de diseño web que prefiera:</label><br>
        <select name="herramienta">
            <option value="Word">Word</option>
            <option value="Visual Studio Code">Visual Studio Code</option>
            <option value="Sublime Text">Sublime Text</option>
            <option value="Notepad++">Notepad++</option>
        </select><br><br>

        <label>Indique sus comentarios:</label><br>
        <textarea name="comentario" rows="5" cols="40"></textarea><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar todo">
        <br><br><br>
    </form>
</body>
</html>
