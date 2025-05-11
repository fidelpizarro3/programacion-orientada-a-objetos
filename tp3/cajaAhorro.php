<?php

include_once "cuenta.php";


class cajaAhorro extends Cuenta{
    public function __construct($numeroCuenta, $saldo, $titular) {
        parent::__construct($numeroCuenta, $saldo, $titular);
    }

    public function __toString() {
        return parent::__toString() . " (Caja de Ahorro)";
    }
}

