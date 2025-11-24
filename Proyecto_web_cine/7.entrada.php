<?php
$validaciones = [
    "Antonio" => ["asiento" => 1, "cine" => "los_arcos"],
    "Noelia" => ["asiento" => 2, "cine" => "cine_alcores"],
    "Pepe" => ["asiento" => 3, "cine" => "los_arcos"],
    "Sofia" => ["asiento" => 4, "cine" => "cine_nervion"]
];

$usuario = $_GET['usuario'] ?? '';
$asiento = (int)($_GET['asiento'] ?? 0);
$cine = $_GET['cine'] ?? '';

if (!isset($validaciones[$usuario]) ||
    $validaciones[$usuario]['asiento'] !== $asiento ||
    $validaciones[$usuario]['cine'] !== $cine) {
    header("Location: inicio.php?error=Entrada inválida");
    exit;
} else {
    echo "Entrada válida para $usuario, asiento $asiento en $cine";
}
?>
