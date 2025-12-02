<?php

class Alumnado{
    //variables.
    private $nombre;
    private $apellido;
    private $year;
    private $numeroMatricula;
    private $notas;

    //constructor.
    public function __construct($nombre, $apellido, $year, $numeroMatricula){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->year = $year;
        $this->numeroMatricula = $numeroMatricula;
        $this->notas = [
            "DWES" => [null, null],
            "DWEC" => [null, null],
            "DI" => [null, null],
            "DAW" => [null, null],
            "EIE" => [null, null],
        ];
    }

    //getters and setters.
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getYear(){
        return $this->year;
    }

    public function getNumeroMatricula(){
        return $this->numeroMatricula;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function setNumeroMatricula($numeroMatricula){
        $this->numeroMatricula = $numeroMatricula;
    }

    //Metodo calcular nota final.
    public function calcularNotasFinal($modulo){

        if (isset($this->notas[$modulo])){
        $evaluacion1 = $this->notas[$modulo][0];  
        $evaluacion2 = $this->notas[$modulo][1];  

        if ($evaluacion1 != null && $evaluacion2 != null) {
            $notaFinal = ($evaluacion1 + $evaluacion2) / 2;
        }else {
            $notaFinal = null;
        }
    }
        return $notaFinal;
    }

    //Metodo obtener nota.
    public function obtenerNota($modulo, $evaluacion){
        if (isset($this->notas[$modulo]) && ($evaluacion == 1 || $evaluacion = 2)) {
            $nota = $this->notas[$modulo][$evaluacion - 1];
        }else {
            $nota = null;
        }
        return $nota;
    }

    //Metodo asignar nota.
    public function asignarNota($modulo, $evaluacion, $nota){
        if (isset($this->notas[$modulo]) && ($evaluacion == 1 || $evaluacion = 2) && ($nota >=0 && $nota <= 10)) {
            $this->notas[$modulo][$evaluacion - 1] = $nota;
            return true;
        }else {
            return false;
        }
    }
}

// creamos alumnado 
$alumno = new Alumnado("Pepe", "garcia", 2025, "DAW25");
$alumno->asignarNota("DWES", 1, 7);
$alumno->asignarNota("DWES", 2, 6);
$alumno->asignarNota("DWEC", 1, 9);
$alumno->asignarNota("DI", 2, 8);

// Obtener nota
echo "La nota de la primera evaluacion de DWES es: " .$alumno->obtenerNota("DWEC", 1); 

echo "<br>Nota Final: " .$alumno->calcularNotasFinal("DWEC");