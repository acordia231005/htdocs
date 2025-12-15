<?php
require_once 'conexion.inc.php';

$nombre = $_POST['nombre'];

try {
    $pdo = new PDO(DSN, USUARIO, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");

    $sql = "select nombreContacto, apellidosContacto, 
            emailContacto, tfnoContacto 
            from agenda 
            where nombreContacto = :nombre";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nombre' => $nombre]);

    $contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($contactos)) {
        echo "No se encontraron resultados para la búsqueda.";
    } else {
        echo "Resultados de la búsqueda:<br>";
        foreach ($contactos as $contacto) {
            echo "Nombre: " . $contacto['nombreContacto'] . "<br>";
            echo "Apellidos: " . $contacto['apellidosContacto'] . "<br>";           
            echo "Email: " . $contacto['emailContacto'] . "<br>";
            echo "Teléfono: " . $contacto['tfnoContacto'] . "<br>";
        }
    }
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>