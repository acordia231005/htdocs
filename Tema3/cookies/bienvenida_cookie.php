<?php

if (isset($_COOKIE['usuario'])) {
    echo "Bienvenido, " . $_COOKIE['usuario'] . "!";
}else {
    echo "aqui no puedes entrar";
}