<?php
function conectar(){
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=m_agenda;charset=utf8',
            'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES 'utf8'");
        return $pdo;
   } catch (PDOException $e) {
$mensaje = "Error en la conexión a la
base de datos";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
}
}
function agregarContacto ($nombre, $apellidos,
$email, $telefono) {
try {
$pdo = conectar();
$sql = "INSERT INTO agenda
(nombreContacto, apellidosContacto, emailContacto, tfnoContacto)
VALUES (:nombre, :apellidos,
:email, telefono)";
$stmt = $pdo->prepare($sql);
$stmt->execute ([
':nombre' => $nombre,
':apellidos' => $apellidos,
':email' => $email,
':telefono' => $telefono
]);
$pdo = null;
} catch (PDOException $e) {
$mensaje = "Error al añadir el
contacto";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
}
}
function eliminarContacto ($id) {
try {
$pdo = conectar();
$sql = "DELETE FROM agenda WHERE
idContacto = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$pdo = null; 
} catch (PDOException $e) {
$mensaje = "Error al eliminar el
contacto";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
}
}
function obtenerContactos () {
try {
$pdo = conectar();
$sql = "SELECT * FROM agenda";
$lista = $pdo->query($sql);
$pdo = null; 
return $lista;
} catch (PDOException $e) {
$mensaje = "Error al obtener la lista
de contactos";
header("location: agenda_principal.php?mensaje=" . urlencode ($mensaje));
exit();
}
}
?>