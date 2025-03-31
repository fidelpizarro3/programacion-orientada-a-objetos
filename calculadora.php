<?php


class Calculadora{

    private $num1;
    private $num2;
    

    public function __construct($numero1,$numero2)
    {
        $this->num1= $numero1;
        $this->num2= $numero2;
    }
    public function getNum1()
    {
        return $this->num1;
    }
    public function setNum1($valor){
        $this->num1= $valor;
    }


    public function getNum2()
    {
        return $this->num2;
    }
    public function setNum2($valor){
        $this->num2 = $valor;
    }


    public function sumar(){
        $suma = $this->getNum1() + $this->getNum2();
        return $suma;
    }
    public function restar(){
        $resta = $this->getNum1() - $this->getNum2();
        return $resta;
    }
    public function multiplicar(){
        $multiplicacion = $this->getNum1() * $this->getNum2();
        return $multiplicacion;
    }
    public function dividir(){
        $result = -1;
        if( $this->getNum2()<> 0){
            $result = $this->getNum1() / $this->getNum2();
        }
    
        return $result;
    }

    public function __toString()
    {
        return "Calculadora: Num 1 {$this->num1}, Num 2 = {$this->num2}, Suma = {$this->sumar()}, Resta = {$this->restar()}, Multiplicar = {$this->multiplicar()}, Dividir = {$this->dividir()}";
    }
} 


$obj = new Calculadora(4,2);