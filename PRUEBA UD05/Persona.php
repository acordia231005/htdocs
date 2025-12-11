<?php
class Persona{
    private $nombre;
    private $apellidos;
	
	public function __construct($nombre, $apellidos){
       $this->nombre = $nombre;
       $this->apellidos = $apellidos;
    }
	
	public function getNombre(){
        return $this->nombre;
    }
	
	public function setNombre($nombre){
        $this->nombre = $nombre;
    }
	
	public function getApellidos(){
        return $this->apellidos;
    }
	
	public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
	
	public function getNombreCompleto(){
		$nombre = $this->nombre;
		$apellidos = $this->apellidos;
		
		return $nombre + " " + $apellidos;
	}
	
	public function __toString(): string {
        return "Nombre: " . $this->nombre . "; Apellidos: " . $this->apellidos ;
    }
}