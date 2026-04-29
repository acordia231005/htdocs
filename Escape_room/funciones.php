<?php

function obtenerPistas() {
return [
1 => [
"Observa el nombre común del castillo que domina el pueblo.",
],
2 => [
"Busca la advocación del templo parroquial principal de Mairena."
],
3 => [
"Relaciónalo con la feria y el baile típico local (flamenco)."
]
];
}


function validarRespuesta($prueba, $respuesta) {
$r = trim(mb_strtolower($respuesta, 'UTF-8'));
$correctas = [
    1 => ['luna', 'castillo de la luna', 'castillo luna'],
    2 => ['flamenco', 'cante jondo', 'cante', 'cantejondo'],
    3 => ['juan el zurdo', 'zurdo', 'juan elzurdo']
];



if (!isset($correctas[$prueba])) return false;


foreach ($correctas[$prueba] as $c) {
if ($r === mb_strtolower($c, 'UTF-8')) return true;
}
return false;
}

function pedirPista($prueba) {
$pistas = obtenerPistas();
if (!isset($_SESSION['pistas_usadas'])) $_SESSION['pistas_usadas'] = 0;
$index = min(count($pistas[$prueba]), $_SESSION['pistas_usadas']);
$_SESSION['pistas_usadas']++;
return $pistas[$prueba][$index];
}


function registrarIntento($prueba) {
if (!isset($_SESSION['intentos'])) $_SESSION['intentos'] = [];
if (!isset($_SESSION['intentos'][$prueba])) $_SESSION['intentos'][$prueba] = 0;
$_SESSION['intentos'][$prueba]++;
}


function obtenerIntentos($prueba) {
if (!isset($_SESSION['intentos'][$prueba])) return 0;
return $_SESSION['intentos'][$prueba];
}


?>