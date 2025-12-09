<?php
namespace grtic;

class Recurso {
    private string $nombre;
    private TipoRecurso $tipoRecurso;
    
    public function __construct(string $nombre, TipoRecurso $tipoRecurso) {
        $this->nombre = $nombre;
        $this->tipoRecurso = $tipoRecurso;
    }
    
    
    
    // Método __toString
    public function __toString(): string {
        return "Recurso: {$this->nombre} | " . $this->tipoRecurso->__toString();
    }
}
?>