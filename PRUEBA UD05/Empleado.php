<?php
require_once "Persona.php";

use Persona;
class Empleado extends  Persona {
	private $salario;
	private $telefonos;
	const SUELDO_TOPE = 3000;

	function __construct($nombreRecibido, $apellidosRecibidos){
		parent::__construct($nombreRecibido, $apellidosRecibidos);
		$this->salario = 1000;
		$this->telefonos = [];
    }
	
	function getSalario(){
        return $this->salario;
    }
	
	function setSalario($salario){
        $this->salario = $salario;
    }
	
	function getTelefonos(){
        return $this->telefonos;
    }
	
	function setTelefonos($telefonos){
        $this->telefonos = $telefonos;
    }
	
	function debePagarImpuestos($salario){
		if($salario >= self::SUELDO_TOPE){return true;} else {return false;}
	}
	
	function anyadirTelefono(int $telefono): void{
		$this->telefonos[] = $telefono;
	}
	
	function listarTelefonos(){
		foreach ($this->telefonos as $index => $telefono) {
			echo  $telefono . ", ";
		}
	}
	
	function vaciarTelefonos(): void{	
		 $this->telefonos = [];
	}
	
	static function toHtml($empleado): void{
		echo "<p>" . $empleado->getNombre . ", " . $empleado->getApellidos. ", " . $empleado->getSalario . "</p>";
		echo "<ol>";
		foreach ($empleado->getTelefonos() as $telefono) {
			echo  "<li>" . $telefono . "</li>";
		}
		echo "</ol>";
	}
	
	function __toString(): string {
        return "Nombre completo: " . $this->getNombreCompleto()
				. ", salario: " . $this->salario
				. " y telefono: " . $this->listarTelefonos();
    }
	
}