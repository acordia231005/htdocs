<?php require_once 'config.php';
require_once 'clases/Agenda.php';

echo"<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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

        input[type='text'],
        input[type='email'],
        input[type='tel'] {
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
        }

        input[type='submit'] {
            color: black;
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
        }

        input[type='submit']:hover {
            color: white;
            background-color: black;
            cursor: pointer;
            transition: all 0.5s ease;
            transform: scale(1.5);
        }
    </style>
</head>

<body>
    <div class='container'>
        <h1>Agenda</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>";
       
                $agenda = new Agenda();
                $contactos = $agenda->obtenerContactos();
                foreach ($contactos as $contacto) {
                    $id_contacto = $contacto->getId() ?? null;
                    echo "<tr>";
                    echo "<td>" . $contacto->getNombre() . "</td>";
                    echo "<td>" . $contacto->getApellidos() . "</td>";
                    echo "<td>" . $contacto->getCorreo() . "</td>";
                    echo "<td>" . $contacto->getTelefono() . "</td>";
                    echo "<td><a href='agenda_eliminar.php?id=" . $id_contacto . "'>Dar de baja</a><br>";
                    echo "<a href='agenda_actualizar.php?id=" . $id_contacto . "'>Actualizar</a></td>";
                    echo "</tr>";
                }
                
         echo   "</tbody>
        </table>";

        echo "<h1>Añadir Contactos</h1>";
        echo " <form action='agenda_agregar.php' method='post'>";
        echo " <label for='nombre'>Nombre</label>";
        echo " <input type='text' id='nombre' name='nombre'>";

        echo " <label for='apellidos'>Apellidos</label>";
        echo " <input type='text' id='apellidos' name='apellidos'>";

        echo " <label for='email'>Email</label>";
        echo " <input type='email' id='email' name='email'>";

        echo " <label for='telefono'>Telefono</label>";
        echo " <input type='tel' id='telefono' name='telefono'>";

        echo " <input type='submit' value='Enviar'>";
        echo " <input type='submit' value='Actualizar'>";
        
        echo "</form>";
        
        if (!empty($_SESSION['mensaje'])) {
            $tipo = $_SESSION['tipo_mensaje'] ?? 'exito';
            echo "<p style='color: " . ($tipo === 'exito' ? 'green' : 'red') . "; font-weight:bold; background-color: black; font-size: 20px'>";
            echo htmlspecialchars($_SESSION['mensaje']);
            echo "</p>";
            unset($_SESSION['mensaje'], $_SESSION['tipo_mensaje']);
        }
     
        echo "</div>
</body>
</html>";