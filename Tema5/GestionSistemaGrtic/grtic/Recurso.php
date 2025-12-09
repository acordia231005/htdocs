<?php
namespace grtic;

class Recurso {
    private string $nombreRecurso;
    private TipoRecurso $tipoRecurso;
    
    public function __construct(string $nombre, TipoRecurso $tipoRecurso) {
        $this->nombreRecurso = $nombre;
        $this->tipoRecurso = $tipoRecurso;
    }
    
    public function getNombreRecurso() {
        return $this->nombreRecurso;
    }
    
    public function setNombreRecurso($nombre) {
        $this->nombreRecurso = $nombre;
    }

    public function getTipoRecurso() {
        return $this->tipoRecurso;
    }

    public function setTipoRecurso($tipoRecurso) {
        $this->tipoRecurso = $tipoRecurso;
    }
    // Método __toString
    public function __toString(): string {
        return "Recurso: {$this->nombreRecurso} | " . $this->tipoRecurso->__toString();
    }
}
?>