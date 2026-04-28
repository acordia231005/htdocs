<?php
require 'db.php';
require 'includes/header.php';

// BORRAR
if (isset($_GET['borrar'])) {
    $stmt = $pdo->prepare("DELETE FROM clientes WHERE idCliente=?");
    $stmt->execute([$_GET['borrar']]);
}

// LISTADO
$clientes = $pdo->query("SELECT * FROM clientes")->fetchAll();
?>

<h2>👤 Gestión de clientes</h2>

<table class="table table-dark">
<tr>
    <th>ID</th>
    <th>Usuario</th>
    <th>Correo</th>
    <th>Acciones</th>
</tr>

<?php foreach($clientes as $c): ?>
<tr>
    <td><?= $c['idCliente'] ?></td>
    <td><?= $c['usuario'] ?></td>
    <td><?= $c['correo'] ?></td>
    <td>
        <a href="?borrar=<?= $c['idCliente'] ?>" class="btn btn-danger btn-sm">Borrar</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

<?php require 'includes/footer.php'; ?>