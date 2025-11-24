 <?php
// TODO: Iniciar sesión
session_start();

// TODO: SE VAN A HACER COMPROBACIONES


    // TODO: Comprobar que la petición es POST. Sino, mostrar el mensaje: "Acceso no permitido."
	try{
		if ($_SERVER['request_method'] === 'post'){
			
    // TODO: Recoger y sanear las entradas.
			$nombre = $_POST['nombre'];
			$edad = $_POST['edad'];
    // TODO: Validar:
    // - Si el nombre está vacío → lanzar mensaje: "El nombre no puede estar vacío.")
    // - Si la edad es menor que 1 o mayor que 100 → lanzar mensaje: "La edad debe estar entre 1 y 100 años."
		if(empty($nombre)){
			echo "El nombre no puede estar vacío.";
		}
		if($edad < 1 || $edad > 100){
			echo "La edad debe estar entre 1 y 100 años.";
		}

    // TODO: Guardar el resultado saneado en la sesión.
		$_SESSION["nombre"] = htmlspecialchars($_POST['nombre']);
		$_SESSION["edad"] = htmlspecialchars($_POST['edad']);

    // TODO: Redirigir a bienvenida.php con header("Location: ...") y salir con exit;
			header("Location:bienvenida.php");
			exit();
		}
	}catch (exception $ex) {
    echo "Acceso no permitido.";
	}

// TODO: CAPTURAR LA EXCEPCIÓN


    // TODO: Guardar el mensaje de error en una cookie 'flash_error' con duración ~60 segundos.
    // Pista: setcookie('flash_error', $e->getMessage(), time()+60, '/');
		$e = "Error";
		setcookie('flash_error', $e->getMessage(), time() + 60);
    // TODO: Redirigir de vuelta a index.php y salir con exit;
		header("Location:index.php");
		exit();