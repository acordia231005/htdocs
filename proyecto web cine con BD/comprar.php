<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db.php';
require 'vendor/autoload.php';

// Importaciones necesarias para la nueva versión de QrCode
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!isset($_SESSION['id'])) {
    echo "
    <html>
    <head><style>
    .login-alert {
    max-width: 500px;
    margin: 80px auto;
    padding: 30px;
    border-radius: 15px;
    background: linear-gradient(135deg, #ffefba, #ffffff);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    text-align: center;
    animation: fadeIn 0.4s ease-in-out;
}

.login-alert h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #333;
}

.login-alert p {
    color: #555;
    font-size: 1rem;
}

.login-alert .btn {
    margin-top: 15px;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: bold;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style></head>
    <body>
    <div class='alert alert-danger text-center mt-5 shadow login-alert'>
        <h3>🚫 Acceso denegado</h3>
        <p class='mt-2'>Debes iniciar sesión para ver esta página.</p>
        <a href='login.php' class='btn btn-dark mt-3 px-4'>Iniciar sesión</a>
    </div>
    </body>
        ";
    require 'includes/footer.php';
    die();
}

$idCliente = $_SESSION['id'];
$idCine = $_POST['cine'];
$asiento = strtoupper(trim($_POST['asiento']));

// Verificar ocupación
$stmt = $pdo->prepare("SELECT * FROM entradas WHERE idCine=? AND asiento=?");
$stmt->execute([$idCine, $asiento]);

if ($stmt->fetch()) {
    die("⚠️ Asiento ya ocupado");
}

// GUARDAR (Corregido: 3 columnas, 3 signos de interrogación)
$stmt = $pdo->prepare("INSERT INTO entradas (idCliente, idCine, asiento) VALUES (?, ?, ?)");
$stmt->execute([$idCliente, $idCine, $asiento]);

$idEntrada = $pdo->lastInsertId();

// --- NUEVA LÓGICA DE QR ---
$qr = new QrCode("Entrada $idEntrada - Asiento $asiento");
$writer = new PngWriter();
$result = $writer->write($qr);

$ruta = "qr/entrada_$idEntrada.png";

// Asegúrate de que la carpeta 'qr' existe
if (!is_dir('qr')) {
    mkdir('qr', 0777, true);
}

// Guardar el contenido del QR
$result->saveToFile($ruta);
// --------------------------

// EMAIL
$stmt = $pdo->prepare("SELECT correo FROM clientes WHERE idCliente=?");
$stmt->execute([$idCliente]);
$correo = $stmt->fetchColumn();

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'TU_CORREO@gmail.com'; // Cambia esto
    $mail->Password = 'TU_PASSWORD_APP';    // Usa una contraseña de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('cine@app.com', 'Cine');
    $mail->addAddress($correo);

    $mail->addAttachment($ruta);

    $mail->isHTML(true);
    $mail->Subject = 'Tu entrada';
    $mail->Body = "Entrada comprada correctamente. <br><b>Asiento:</b> $asiento";

    $mail->send();
} catch (Exception $e) {
    error_log("Error enviando mail: " . $mail->ErrorInfo);
}

require 'includes/header.php';

echo "<div class='alert alert-success text-center mt-5'>
🎟️ Entrada comprada correctamente
</div>";

echo "<div class='text-center'>
<a href='mis_entradas.php' class='btn btn-primary'>Ver mis entradas</a>
</div>";

require 'includes/footer.php';
