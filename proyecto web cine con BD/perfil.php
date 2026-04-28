<?php
session_start();
require 'db.php';
require 'includes/header.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];

// ACTUALIZAR DATOS
if ($_POST) {

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // validar correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger text-center'>Correo no válido</div>";
    } else {

        if (!empty($password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("
                UPDATE clientes 
                SET usuario=?, correo=?, password=? 
                WHERE idCliente=?
            ");
            $stmt->execute([$usuario, $correo, $password, $id]);
        } else {
            $stmt = $pdo->prepare("
                UPDATE clientes 
                SET usuario=?, correo=? 
                WHERE idCliente=?
            ");
            $stmt->execute([$usuario, $correo, $id]);
        }

        echo "<div class='alert alert-success text-center'>Datos actualizados</div>";
    }
}

// OBTENER DATOS
$stmt = $pdo->prepare("SELECT * FROM clientes WHERE idCliente=?");
$stmt->execute([$id]);
$user = $stmt->fetch();
?>

<h2>👤 Mi perfil</h2>

<div class="card p-4">

<form method="POST">

    <label>Usuario</label>
    <input class="form-control mb-2" name="usuario" value="<?= $user['usuario'] ?>">

    <label>Correo</label>
    <input class="form-control mb-2" name="correo" value="<?= $user['correo'] ?>">

    <label>Nueva contraseña (opcional)</label>
    <input type="password" class="form-control mb-3" name="password">

    <button class="btn btn-primary">Actualizar datos</button>

</form>

<hr>

<!-- DARSE DE BAJA -->
<a href="baja.php" class="btn btn-danger"
onclick="return confirm('¿Seguro que quieres eliminar tu cuenta?')">
🚫 Darse de baja
</a>

</div>

<?php require 'includes/footer.php'; ?>