<?php
session_start();
require 'db.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];

// eliminar entradas del usuario primero (importante)
$stmt = $pdo->prepare("DELETE FROM entradas WHERE idCliente=?");
$stmt->execute([$id]);

// eliminar cliente
$stmt = $pdo->prepare("DELETE FROM clientes WHERE idCliente=?");
$stmt->execute([$id]);

session_destroy();

header("Location: index.php");
exit;
