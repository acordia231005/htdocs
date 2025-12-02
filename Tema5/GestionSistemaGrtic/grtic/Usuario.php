<?php
namespace grtic;
class Usuario{
    private $nombreCompleto;
    private $nombreUsuario; 
    private $password;

    public function __construct($nombreCompleto, $nombreUsuario){
        $this->nombreCompleto = $nombreCompleto;
        $this->nombreUsuario = $nombreUsuario;
    }

    public function getNombreCompleto(){
        return $this->nombreCompleto;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setNombreCompleto($nombreCompleto){
        $this->nombreCompleto = $nombreCompleto;
    }

    public function setNombreUsuario($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function __toString(){
      return $this->getNombreCompleto() 
                . " (Login: " . $this->getNombreUsuario() . ")";
    }
}