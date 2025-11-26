<?php
	// Recojo variables.
	$titulos = $_POST['titulo']; 
	$anios = $_POST['anio'];
	$paginas = $_POST['paginas'];

	// creo un array asociativo.
	$libros = [$titulos, $anios, $paginas];

	// creo funcion determinar el estado.
	function determinarEstado($anio, $paginas){
			$categoria = "";
			if($anio >= 2015 && $paginas <= 300){
				$categoria .= "Disponible para préstamo";
			}else if($paginas > 300){
				$categoria .= "Solo consulta en sala";
			}else if($anio < 1990){
				$categoria .= "Ejemplar antiguo";
			}else{
				$categoria .= "Consulta general";
			}
			return $categoria;
	}
	
	// creo la tabla en la cual voy a mostrar los datos.
	echo "<h1>Informe de disponibilidad de libros</h1>";
	echo "<table border = 1>";
	echo "<thead>"; 
	echo 	"<th>Titulo</th>";
	echo 	"<th>Año</th>";
	echo 	"<th>Páginas</th>";
	echo 	"<th>Estado</th>";
	echo "</thead>";
	echo "<tbody>";
	foreach($libros as $libro){
			echo "<td>";
			echo $libro;
			echo "</td>";
	}
	echo "<td>";
	echo determinarEstado(anio: $anios, paginas: $paginas);
	echo "</td>";
	echo "</tbody>";
	echo "</table>";
	echo "<br>";
	echo "<a href='index.html'>Volver al formulario</a>";
?>