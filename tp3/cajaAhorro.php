<?php


include "cuenta.php";

class CajaAhorro extends Cuenta{

    public function __toString()
    {
        return parent::__toString() . "(CAJA AHORRO)";
    }
}