<?php

include_once "cuenta.php";

class CuentaCorriente extends Cuenta{
    public $montoDescubierto;


    public function __construct($numeroCuenta,$saldo,$titular,$montoDescubierto){
        parent::__construct($numeroCuenta,$saldo,$titular);
        $this->montoDescubierto = $montoDescubierto;
    }

    
    public function getMontoDescubierto()
    {
        return $this->montoDescubierto;
    }

    public function setMontoDescubierto($montoDescubierto)
    {
        $this->montoDescubierto = $montoDescubierto;

        return $this;
    }

    public function extraer($monto){
        $seRetiro = false;
        if($monto <= $this->getSaldo() + $this->getMontoDescubierto()){
            $this->setSaldo($this->getSaldo() - $monto);
            $seRetiro = true;
        }
        else {$seRetiro = false;
        }
        return $seRetiro;
    }

    public function __toString()
    {
        return parent::__toString() . " Descubierto permitido: " . $this->getMontoDescubierto();
    }
}