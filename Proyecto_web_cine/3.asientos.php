<?php

session_start();

if (!isset($_SESSION["usuario"]) || !isset($_SESSION["password"])) {
    header("Location: 1.inicio.php");
    exit();
}

$cineSeleccionado = isset($_COOKIE["cine"]) ? $_COOKIE["cine"] : "No seleccionado";


echo "<h2>Hola " . $_SESSION["usuario"] . ", selecciona un asiento</h2>";
echo "<p>Cine seleccionado: " . $cineSeleccionado . "</p>";
?>
<html>
<head>
    <title>asientos</title>
    <style>
        body{
            text-align: center;
            font-size: 20px;
        }
        table{
            display: flex;
            justify-content: center;
            align-items: center;
            border-collapse: collapse;
            margin: auto;
            font-size: 25px;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
    <tr>
    <th colspan = 3> Asiento </th>
    </tr>
    <tr>
        <td><a href='4.codigo.php?asiento=1'>1</a></td>
        <td><a href='4.codigo.php?asiento=2'>2</a></td>
    </tr>
    <tr>
        <td><a href='4.codigo.php?asiento=3'>3</a></td>
        <td><a href='4.codigo.php?asiento=4'>4</a></td>
    </tr>
    </table>
</body>