<?php 

//Crear clase.
class CuentaBancaria{
    // Variables.
    private $usuario ;
    private $pin; 
    private $saldo;
    private $entradas;
    private $salidas;

    // constructor, usuario y pin.
    public function __construct($usuario, $pin){
       $this->usuario = $usuario;
       $this->pin = $pin;
       $this->saldo = 0;
       $this->entradas = [];
       $this->salidas = [];
    }

    //Meteodo cambia pin(set).
    public function cambiapin($nuevopin){
        $this->pin = $nuevopin;
    }

    //Metodo valida usuario.
    public function validaUsuario($usuario, $pin){
        $valido = false;
        if($this->usuario === $usuario && $this->pin === $pin){
            $valido = true;
        }
        return $valido;
    }

    //Metodo ingresar.
    public function ingresar($cantidad){
        $this->entradas[] = $cantidad;
        $this->saldo += $cantidad;
    }

    //Metodo sacar.
    public function sacar($cantidad){
        $Puede = false;
        if ($this->saldo >= $cantidad) {
            $puede = true;
            $this->saldo -= $cantidad;
            $this->salidas[] = $cantidad;
        }
        return $Puede;
    }

    //Metodo getSaldo.
    public function getSaldo(){
        return $this->saldo;
    }

    //Metodo getEntradas.
    public function getEntradas(){
        return $this->entradas;
    }

    //Metodo getSalidas.
    public function getSalidas(){
        return $this->salidas;
    }

    public function __destruct(){
        echo "<br>Cuenta de {$this->usuario} cerrada.<br>";
    }
}

    //ejemplo
    $cuenta = new CuentaBancaria( "fidel", "1234");

    //Validamos usuario
    if ($cuenta->validaUsuario("fidel", "1234")) {
       echo "Usuario válido.<br>";
       // ingresamos , 100$.
       $cuenta->ingresar(100);
       echo "Se han ingresado 100$. Saldo actual: " . $cuenta->getSaldo() . "$<br>";

       $gasto = 40;
       // sacar, 80$.
       if ($cuenta->sacar($gasto)<$cuenta->getSaldo()) {
       echo "Se han retirado $gasto$. Saldo actual: " . $cuenta->getSaldo() . "$<br>";
       echo "<h1>Listado de Entradas</h1>";

       foreach ($cuenta->getEntradas() as $entrada) {
        echo "Entrada: {$entrada}$<br>";
       }

       foreach ($cuenta->getSalidas() as $salida) {
        echo "Salida: {$salida}$<br>";
       }
       }else {
        echo "Fondos insuficientes para retirar {$gasto}$.<br>";
       }
    }else {
        echo "El usuario o pin no es válido";
    }

