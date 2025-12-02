<?php 
// Clase Contacto
class Contacto{
    private $nombre;
    private $telefono; 
    private $email;

    public function __construct($nombre, $telefono, $email){
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->email = $email;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

//clase Agenda
class Agenda{
    private $contactos = [];

    public function addContacto($contacto){
        $this->contactos[] = $contacto;
    }
    
    public function verContacto(){
        return $this->contactos;
    }

    public function totalContactos(){
        return count($this->contactos);
    }
}