<?php
require 'libs/phpqrcode/qrlib.php';

$text = "http://localhost/proyecto_web_cine/entrada.php?nombre=Antonio&asiento=1&cine=los_arcos";
QRcode::png($text);