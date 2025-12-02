<?php
namespace grtic;
class TipoRecurso{
    private $nombreRecurso;

    public function __construct($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso;
    }

    public function getNombreRecurso(){
        return $this->nombreRecurso;
    }

    public function setNombreRecurso($nombreRecurso){
        $this->nombreRecurso = $nombreRecurso;
    }

    public function __toString(){
        return "Nombre del recurso: " . $this->nombreRecurso;
    }

}