<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <style>
        body {
            background-color: lightgray;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            height: 75vh;
        }

        .container {
            background-color: gray;
            width: 50%;
            margin: auto;
            padding: 20px;
        }

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: white;
            color: black;
        }

        tbody {
            background-color: #C0C0C0;
            color: black;
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        label {
            color: white;
            font-size: 20px;
            text-decoration: underline;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
        }

        input[type="submit"] {
            color: black;
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
        }

        input[type="submit"]:hover {
            color: white;
            background-color: black;
            cursor: pointer;
            transition: all 0.5s ease;
            transform: scale(1.5);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Agenda</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Baja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'agenda_funciones.php';

                $contactos = obtenerContactos();
                while ($contacto = $contactos->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $contacto['nombreContacto'] . "</td>";
                    echo "<td>" . $contacto['apellidosContacto'] . "</td>";
                    echo "<td>" . $contacto['emailContacto'] . "</td>";
                    echo "<td>" . $contacto['tfnoContacto'] . "</td>";
                    echo "<td><a href='agenda_eliminar.php?id=" . $contacto['idContacto'] . "'>Dar de baja</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h1>Añadir Contactos</h1>
        <form action="agenda_agregar.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" name="telefono">

            <input type="submit" value="Enviar">
        </form>
        <?php
        session_start();
        if (!empty($_SESSION['mensaje'])) {
            $tipo = $_SESSION['tipo_mensaje'] ?? 'exito';
            echo "<p style='color: " . ($tipo === 'exito' ? 'green' : 'red') . "; font-weight:bold; background-color: black; font-size: 20px'>";
            echo htmlspecialchars($_SESSION['mensaje']);
            echo "</p>";
            unset($_SESSION['mensaje'], $_SESSION['tipo_mensaje']);
        }
        exit;
        ?>
    </div>
</body>

</html>