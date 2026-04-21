<?php

class Contacto {

private $id;
private $nombre;
private $apellidos;
private $correo;
private $telefono;

public function __construct ($id, $nombre, $apellidos, $correo, $telefono) {
$this->id = $id;
$this->nombre = $nombre;
$this->apellidos = $apellidos;
$this->correo = $correo;
$this->telefono = $telefono;
}

public function getId() { return $this->id; }
public function getNombre () { return $this->nombre; }
public function getApellidos () { return $this->apellidos; }
public function getCorreo () { return $this->correo; }
public function getTelefono () { return $this->telefono; }

}