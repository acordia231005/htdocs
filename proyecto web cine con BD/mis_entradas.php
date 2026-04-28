<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db.php';
require 'clases/Entrada.php';
require 'includes/header.php';

if (!isset($_SESSION['id'])) {
    die("Login requerido");
}

$entradas = Entrada::obtenerPorCliente($pdo, $_SESSION['id']);
?>

<h2>Mis entradas</h2>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Cine</th>
        <th>Asiento</th>
        <th>QR</th>
        <th>Ticket</th>
    </tr>

    <?php foreach ($entradas as $e): ?>
        <tr>
            <td><?= $e['idEntrada'] ?></td>
            <td><?= $e['nombre'] ?> (<?= $e['poblacion'] ?>)</td>
            <td>
                <?php
                if (!empty($e['asiento'])) {
                    echo "Fila " . substr($e['asiento'], 0, 1) . " - Nº " . substr($e['asiento'], 1);
                } else {
                    echo "Sin asignar";
                }
                ?>
            </td>
            <td>
                <img src="qr/entrada_<?= $e['idEntrada'] ?>.png" width="80">
            </td>
            <td>
                <a href="ticket.php?id=<?= $e['idEntrada'] ?>" class="btn btn-primary btn-sm">
                    📄 PDF
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require 'includes/footer.php'; ?>