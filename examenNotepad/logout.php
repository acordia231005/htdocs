 <?php
// TODO: Iniciar sesión
session_start();


// TODO: Vaciar el array $_SESSION.
$_SESSION[] = '';

$params = session_get_cookie_params();
setcookie(session_name(), '', time()-3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);


// TODO: Destruir la sesión con session_destroy().
session_destroy()

// TODO: Borrar cookie de error
setcookie('flash_error', '', time() - 60);

// TODO: Redirigir a index.php y salir.
header("location:index.php");
exit();
