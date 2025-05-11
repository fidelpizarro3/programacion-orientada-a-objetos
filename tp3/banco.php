<?php

include_once "cliente.php";
include_once "cuenta.php";


class Banco {
    private $coleccionCuentaCorriente;
    private $coleccionCajaAhorro;
    private $ultimoValorCuentaAsignado;
    private $coleccionCliente;

    
    public function __construct() {
        $this->coleccionCuentaCorriente = [];
        $this->coleccionCajaAhorro = [];
        $this->coleccionCliente = [];
        $this->ultimoValorCuentaAsignado = 0;
    }
}