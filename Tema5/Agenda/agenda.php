<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda Digital</title>
</head>
<body>
    <h2>Mi Agenda de Contactos</h2>
    <?php
    include "clases.php";
    session_start();
    // Inicializar la agenda en la sesión si no existe
    if (!isset($_SESSION["agenda"])) {
        $_SESSION["agenda"] = new agenda();
    }
 
    $agenda = $_SESSION["agenda"];

    if ($agenda->totalContactos() == 0) {
        echo "<p>No tienes contactos en la agenda</p>";
    }else {
        echo "<table border=2>";
        echo "<tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        </tr>";

        foreach ($agenda->verContacto() as $contacto) {
            echo "<tr>";
            echo "<td>"; 
            echo $contacto->getNombre();
            echo "</td>";
            
            echo "<td>". $contacto->getTelefono() . "</td>";
            echo "<td>". $contacto->getEmail() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?> 
    <h3>Agregar Nuevo Contacto</h3>
    <form action="procesar_contacto.php" method="POST">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Teléfono: <input type="text" name="telefono" required></label><br>
        <label>Correo: <input type="email" name="correo" required></label><br>
        <button type="submit">Añadir Contacto</button>
    </form>
</body>
</html>