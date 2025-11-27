<?php

class Alumnado{
    //variables.
    private $nombre;
    private $apellido;
    private $year;
    private $numeroMatricula;
    private $notas;

    //constructor.
    public function __construct($nombre, $apellido, $year, $numeroMatricula, $notas){
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

    }

    //Metodo obtener nota.
    public function obtenerNota($modulo, $evaluacion){

    }

    //Metodo asignar nota.
    public function asignarNota($modulo, $evaluacion, $nota){
    
    }
}