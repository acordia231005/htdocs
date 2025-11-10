<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
echo "La variable count vale " . $_SESSION['count'];
echo "<br><a href='1sesiones.php'>Siguiente</a>";
echo "<br><a href='cerrarsesioni.php'>cerrar sesion</a>";
?>
