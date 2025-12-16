<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuentralos por su nombre</title>
    <style>
        body {
            background-color: grey;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            height: 75vh;
        }

        .container {
            background-color: lightslategray;
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

        input[type="text"] {
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

        <h1>Encuentra el telefono de tu contacto por el nombre</h1>

        <form action="procesar_busqueda.php" method="post">
            <label for="nombre">Nombre del contacto:</label>
            <input type="text" id="nombre" name="nombre"><br>
            <input type="submit" value="Buscar">
        </form>

    </div>
</body>

</html>