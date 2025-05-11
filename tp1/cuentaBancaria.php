<?php


class cuentaBancaria{

    private const diasAnio = 365;

    private $numeroCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;


    public function __construct($nroCuenta, $dniCte, $saldoAct, $interesAnual){
        $this->numeroCuenta = $nroCuenta;
        $this->dniCliente = $dniCte;
        $this->saldoActual = $saldoAct;
        $this->interesAnual = $interesAnual;

    }

    //getters

    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }

    public function getDniCliente(){
        return $this->dniCliente;
    }

    public function getSaldoActual(){
        return $this->saldoActual;
    }

    public function getInteresAnual(){
        return $this->interesAnual;
    }

    //setters

    public function setNumeroCuenta($numero){
        return $this->numeroCuenta = $numero;
    }
    public function setDniCLiente($dni){
        return $this->dniCliente = $dni;
    }
    public function setSaldoActual($saldo){
        return $this->saldoActual = $saldo;
    }
    public function setInteresAnual($interes){
        return $this->interesAnual = $interes;
    }


    public function actualizarSaldo(){
        $this->setSaldoActual($this->getSaldoActual() + $this->getInteresAnual() / 365);
    }


    public function depositarDinero($cant){

        $seDeposito = false;
        if($cant>0){
        $this->setSaldoActual($this->getSaldoActual() + $cant);
        $seDeposito = true;
        }
        return $seDeposito;
    }

    public function retirarDinero($cant){
        
        $seRetiro = false;

        if ( $cant > 0 && $this->getSaldoActual()>0 && $cant <= $this->getSaldoActual()){
            $this->setSaldoActual($this->getSaldoActual() - $cant);
            $seRetiro = true;
        }
        return $seRetiro;
    }

    public function __toString()
    {
        return "Nro cuenta: " . $this->getNumeroCuenta() . " DNI cliente: " . $this->getDniCliente() . " saldo actual: " . $this->getSaldoActual() . " interes anual: " . $this->getInteresAnual();
    }

}


