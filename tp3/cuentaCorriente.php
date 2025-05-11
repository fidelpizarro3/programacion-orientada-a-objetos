<?php

include "cuenta.php";

class CuentaCorriente extends cuenta{

    public $montoDescubierto;

    public function __construct($nroCuenta,$saldo,$objDueño,$montoDescubierto){
        parent::__construct($nroCuenta,$saldo,$objDueño);
        $this->montoDescubierto = $montoDescubierto;
    }

    
    /**
     * Get the value of montoDescubierto
     */ 
    public function getMontoDescubierto()
    {
        return $this->montoDescubierto;
    }

    /**
     * Set the value of montoDescubierto
     *
     * @return  self
     */ 
    public function setMontoDescubierto($montoDescubierto)
    {
        $this->montoDescubierto = $montoDescubierto;

        return $this;
    }
    public function realizarRetiro($monto) {
        $seRetiro = false;
        $saldoDisponible = $this->getSaldo() + $this->getMontoDescubierto();
        if ($monto <= $saldoDisponible) {
            $this->setSaldo($this->getSaldo() - $monto);
            $seRetiro = true;
        } else {
            $seRetiro = false;
        }
        return $seRetiro;
    }
}