<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cine</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span style="color: white;">🎬 Cine</span></a>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php"><span style="color: white;">👤 Mi perfil</span></a>
            </li>

            
            <div>
                <?php if (isset($_SESSION['id'])): ?>
                    <a href="mis_entradas.php" class="btn btn-light">Mis entradas</a>
                    <a href="logout.php" class="btn btn-danger">Salir</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-light">Login</a>
                    <a href="registro.php" class="btn btn-success">Registro</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container mt-4">