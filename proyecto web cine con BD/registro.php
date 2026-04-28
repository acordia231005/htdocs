<?php
require 'db.php';
require 'vendor/autoload.php';
require 'includes/header.php';

use PHPMailer\PHPMailer\PHPMailer;

if ($_POST) {

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // VALIDAR EMAIL
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Correo no válido</div>";
    }

    // VALIDAR PASSWORD (mínimo 6 caracteres)
    elseif (strlen($password) < 6) {
        echo "<div class='alert alert-danger'>La contraseña debe tener al menos 6 caracteres</div>";
    } else {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO clientes (usuario,password,correo)
        VALUES (?,?,?)");

        $stmt->execute([$usuario, $passwordHash, $correo]);

        echo "<div class='alert alert-success'>Registrado correctamente</div>";
    }
}
?>

<h2>Registro</h2>
<form method="POST">
    <input class="form-control mb-2" name="usuario" placeholder="Usuario" required>
    <input class="form-control mb-2" name="correo" placeholder="Correo" required>
    <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
    <button class="btn btn-success">Registrarse</button>
</form>

<?php require 'includes/footer.php'; ?>