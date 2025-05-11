<?php


class Cuenta {

    public $numeroCuenta;
    public $saldo;
    public $objPersona;


    public function __construct($nroCuenta,$saldo ,$objPersona){
        $this->numeroCuenta = $nroCuenta;
        $this->saldo = $saldo;
        $this->objPersona = $objPersona;
    }

    

    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getObjPersona()
    {
        return $this->objPersona;
    }

    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
        return $this;
    }


    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }


    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;
        return $this;
    }

    public function saldoCuenta(){
        return $this->getSaldo();
    }

    public function depositar($monto){
    $this->setSaldo($this->getSaldo()+ $monto);
    }

    public function extraer($monto){
        $extraccion = false;
        if($monto <= $this->getSaldo()){
        $this->setSaldo($this->getSaldo() - $monto);
        $extraccion = true;
        }
        else {$extraccion = false;
        }
        return $extraccion;
    }

    public function __toString()
    {
        return "Nro cuenta: " . $this->getNumeroCuenta() . " Saldo: " . $this->getSaldo() . " titular: " . $this->getObjPersona();
    }
}    
