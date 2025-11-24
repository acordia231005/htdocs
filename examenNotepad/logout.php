 <?php
//  Iniciar sesión
session_start();


//  Vaciar el array $_SESSION.
$_SESSION[] = '';

$params = session_get_cookie_params();
setcookie(session_name(), '', time()-3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);


//  Destruir la sesión con session_destroy().
session_destroy();

// Borrar cookie de error
setcookie('flash_error', '', time() - 60);

// Redirigir a index.php y salir.
header("location:index.php");
exit();
