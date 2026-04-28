<?php
class Entrada
{

    private $idEntrada;
    private $idCliente;
    private $idCine;
    private $asiento;

    public function __construct($idCliente, $idCine, $asiento)
    {
        $this->idCliente = $idCliente;
        $this->idCine = $idCine;
        $this->asiento = $asiento;
    }

    public function insertarBD($pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO entradas (idCliente,idCine,asiento)
        VALUES (?,?,?)");

        $stmt->execute([$this->idCliente, $this->idCine, $this->asiento]);
        $this->idEntrada = $pdo->lastInsertId();
    }

    public static function obtenerPorCliente($pdo,$id) {
    $stmt = $pdo->prepare("
        SELECT e.idEntrada, e.asiento, c.nombre, c.poblacion
        FROM entradas e
        JOIN cines c ON e.idCine = c.idCine
        WHERE e.idCliente=?
    ");
    $stmt->execute([$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
