<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db.php';
require 'includes/header.php';

if ($_POST) {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM clientes WHERE usuario=?");
    $stmt->execute([$usuario]);

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['idCliente'];
        echo "
        <div class='alert alert-success text-center mt-5'>
            <h4>✅ Login correcto</h4>
            <p>Ya puedes continuar.</p>
            <a href='index.php' class='btn btn-primary mt-3'>Ir al inicio</a>
        </div>
        ";
    } else {
        echo "
        <div class='alert alert-danger text-center mt-5' style='width: 50%; margin: 0 auto; display: block;'>
            <h4>❌ Usuario o contraseña incorrectos.</h4>
            <h5 style='color: black;'>Si no tienes cuenta puedes crear una en el registro.</h5>
            <button class='btn mt-3 px-4'><a href='registro.php'>Crear cuenta</a></button>
        </div>
        ";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    <input class="form-control mb-2" name="usuario" placeholder="Usuario">
    <input class="form-control mb-2" type="password" name="password" placeholder="Password">
    <button class="btn btn-primary">Entrar</button>
</form>

<?php require 'includes/footer.php'; ?>