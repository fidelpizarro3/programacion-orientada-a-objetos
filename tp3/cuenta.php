<?php

class Cuenta{

    public $nroCuenta;
    public $objDueño;
    public $saldo;
    public function __construct($nroCuenta,$saldo,$objDueño){
        $this->nroCuenta = $nroCuenta;
        $this->saldo = $saldo;
        $this->objDueño = $objDueño;
    }

    /**
     * Get the value of nroCuenta
     */ 
    public function getNroCuenta()
    {
        return $this->nroCuenta;
    }

    /**
     * Set the value of nroCuenta
     *
     * @return  self
     */ 
    public function setNroCuenta($nroCuenta)
    {
        $this->nroCuenta = $nroCuenta;

        return $this;
    }

    /**
     * Get the value of objDueño
     */ 
    public function getObjDueño()
    {
        return $this->objDueño;
    }

    /**
     * Set the value of objDueño
     *
     * @return  self
     */ 
    public function setObjDueño($objDueño)
    {
        $this->objDueño = $objDueño;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }


    public function saldoCuenta(){
        return $this->getSaldo();
    }

    public function realizarDeposito($monto){
        $this->setSaldo($this->getSaldo() + $monto);
    }

    public function realizarRetiro($monto){
        $seRetiro = false;
        if($monto<=$this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $monto);
            $seRetiro = true;
        }
        else{
            $seRetiro = false;
        }
        return $seRetiro;
    }

    public function __toString()
    {
        return " Nro Cuenta: " . $this->getNroCuenta() . "\n Saldo: " . $this->getSaldo() . "\n CLiente: " . $this->getObjDueño();
    }
}