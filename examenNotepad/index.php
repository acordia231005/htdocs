 <?php
// TODO: Iniciar la sesión
session_start();

// TODO: Leer el mensaje de error desde la cookie 'flash_error' (si existe)
if (isset($_COOKIES['flash_error'])) {
     echo $_COOKIES['flash_error'];
}
// TODO: Si existe el mensaje de error, borrar la cookie 'flash_error'
setcookie('flash_error', '', time() - 60);

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Formulario de datos</title>
  <style>
    body{font-family:Segoe UI,Arial;margin:2rem;}
    form{max-width:400px;padding:1rem;border:1px solid #ddd;border-radius:12px;}
    .error{background:#fee;border:1px solid #d66;color:#900;padding:.6rem;border-radius:6px;}
    label{display:block;margin-top:.5rem;}
    input{width:100%;padding:.5rem;margin-top:.2rem;border:1px solid #bbb;border-radius:6px;}
    button{margin-top:1rem;padding:.6rem 1rem;border-radius:8px;background:#111;color:white;border:none;cursor:pointer;}
  </style>
</head>
<body>
  <h1>Datos del usuario</h1>


  <?php
    // TODO: Si hay mensaje de error, mostrarlo dentro de un <div class="error">
		session_start();
		if (isset($_SESSION["flash_error"])) {
        echo "<p style='color:red;'><strong>".$_SESSION["flash_error"]."</strong></p>";
        unset($_SESSION["flash_error"]);
    }
    ?>

	<div class = 'error'></div>
<!-- TODO: Aquí va el formulario -->
  <form action="comprobacion.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
		<label for="edad">Edad:</label>
        <input type="numero" name="edad" id="edad" required><br><br>
        <input type="submit" value="Enviar">
    </form>
	
	
</body>
</html>
