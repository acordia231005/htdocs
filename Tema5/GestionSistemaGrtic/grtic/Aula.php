<?php
namespace grtic;
class Aula extends TipoRecurso{
    private $Ubicacion;
    private $tipoAula;

    public function __construct($ubicacion, $tipoAula) {
        $this->Ubicacion = $ubicacion;
        $this->tipoAula = $tipoAula;
    }

    public function getUbicacion() {
        return $this->Ubicacion;
    }

    public function getTipoAula() {
        return $this->tipoAula;
    }

    public function setUbicacion($tipoAula) {
        $this->Ubicacion = $tipoAula;
    }

    public function setTipoAula($tipoAula) {
        $this->tipoAula = $tipoAula;
    }

    public function __toString() {
        return parent::__toString() . "| Ubicacion: " . $this->Ubicacion . "| Tipo de aula: " . $this->tipoAula;
    }


}