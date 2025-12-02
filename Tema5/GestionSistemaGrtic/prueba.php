<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <?php
    require_once("grtic/Usuario.php");
    require_once("grtic/Recurso.php");
    require_once("grtic/TipoRecurso.php");
    require_once("grtic/Aula.php");

    use grtic\Usuario;
    use grtic\Recurso;
    use grtic\TipoRecurso;
    use grtic\Aula;
    ?>
</head>
<body>
    <h1>Prueba del Sistema grtic</h1>
    <h2>Gestión de Recursos TIC</h2>

    <h3>1.Prueba de la Clase Usuario</h3>
    <p>Usuario 1 creado: Usuario:
        <?php
            $usuario1 = new Usuario("Ana García López", "agarcia");
            echo $usuario1;
        ?>
    </p>
    <p>Usuario 2 creado: Usuario:
        <?php
            $usuario2 = new Usuario("Carlos Mendoza Ruiz", "cmendoza");
            echo $usuario2;
        ?>
    </p>
    <h4>Probando getters</h4>
    <p>Nombre completo usuario1: 
        <?php  
            $usuario1->getNombreCompleto();
        ?>
    </p>
    <p>Nombre de login usuario2: 
        <?php  
            $usuario2->getNombreUsuario();
        ?>
    </p>

    <h3>2. Prueba de la clase TipoRecurso</h3>


    <h3>3. Prueba de la clase Aula(Herencia de TipoRecurso)</h3>


    <h3>4. Prueba de la Clase Recurso</h3>


    <h3>5. Prueba adicional: Lista de Recursos</h3>


    <h3>6. Resumen del Sistema</h3>


</body>
</html>