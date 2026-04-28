<?php
class Cliente
{

    private $idCliente;
    private $usuario;
    private $password;
    private $correo;

    public function __construct($usuario, $password, $correo)
    {
        $this->usuario = $usuario;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->correo = $correo;
    }

    public function setId($id)
    {
        $this->idCliente = $id;
    }
    public function getId()
    {
        return $this->idCliente;
    }

    public function insertarBD($pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO clientes (usuario,password,correo)
        VALUES (?,?,?)");

        $stmt->execute([$this->usuario, $this->password, $this->correo]);
        $this->idCliente = $pdo->lastInsertId();
    }

    public function eliminarBD($pdo)
    {
        $stmt = $pdo->prepare("DELETE FROM clientes WHERE idCliente=?");
        $stmt->execute([$this->idCliente]);
    }

    public function actualizarBD($pdo)
    {
        $stmt = $pdo->prepare("UPDATE clientes SET usuario=?, correo=? WHERE idCliente=?");
        $stmt->execute([$this->usuario, $this->correo, $this->idCliente]);
    }

    public static function login($pdo, $usuario)
    {
        $stmt = $pdo->prepare("SELECT * FROM clientes WHERE usuario=?");
        $stmt->execute([$usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
