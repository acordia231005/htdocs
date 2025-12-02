<?php
namespace grtic;
class Recurso{
    private $nombreRecurso;
    private $tipoRecurso;

    public function __construct($nombreRecurso, $tipoRecurso){
        $this->nombreRecurso = $nombreRecurso;
        $this->tipoRecurso = $tipoRecurso;
    }

    public function getNombreRecurso(){
        return $this->nombreRecurso;
    }

    public function getTipoRecurso(){
        return $this->tipoRecurso;
    }

    public function setNombreRecurso($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso;
    }

    public function setTipoRecurso($tipoRecurso){
        $this->tipoRecurso = $tipoRecurso;
    }

    public function __toString(){
        return "Nombre del Recurso: " . $this->getNombreRecurso()
                . "Tipo de recurso: " . $this->tipoRecurso->__toString();
    }
}