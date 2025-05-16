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


    public function incorporarCliente($objCliente){
        $this->coleccionCliente[] = $objCliente;
    }


    
        public function incorporarCuentaCorriente($nroCliente,$montoDescubierto){
            $clienteEncontrado = null;
            $i = 0;
    
            while ($i < count($this->coleccionCliente) && $clienteEncontrado == null){
                if($this->coleccionCliente[$i]->getNroCliente() == $nroCliente){
                    $clienteEncontrado = $this->coleccionCliente[$i];
    
                }
                $i++;
            }
            if($clienteEncontrado != null){
                $ultimoValorCta = $this->ultimoValorCuentaAsignado++;
    
                $nuevaCuenta = new CuentaCorriente($ultimoValorCta,0,$clienteEncontrado,$montoDescubierto);
    
                $this->coleccionCuentaCorriente[] = $nuevaCuenta;
            }
        }
    
        public function incorporarCajaAhorro($nroCliente){
            $clienteEncontrado = null;
            $i = 0;
            
            while ($i < count($this->coleccionCliente) && $clienteEncontrado == null){
                if($this->coleccionCliente[$i]->getNroCliente() == $nroCliente){
                    $clienteEncontrado = $this->coleccionCliente[$i];
                    
                }
                $i++;
            }
            if($clienteEncontrado != null){
                $ultimoValorCta = $this->ultimoValorCuentaAsignado++;
                
                $nuevaCuentaAhorro = new CajaAhorro($ultimoValorCta,0,$clienteEncontrado);
                
                $this->coleccionCajaAhorro[] = $nuevaCuentaAhorro;
            }
        }
        

        public function realizarDeposito($nroCuenta, $monto) {
        $cuentaEncontrada = null;
        $i = 0;

        // Buscar en Cuenta Corriente
        while ($i < count($this->coleccionCuentaCorriente) && $cuentaEncontrada == null) {
            if ($this->coleccionCuentaCorriente[$i]->getNumeroCuenta() == $nroCuenta) {
                $cuentaEncontrada = $this->coleccionCuentaCorriente[$i];
            }
            $i++;
        }

        // Si no se encontró en Cuenta Corriente, buscar en Caja de Ahorro
        if ($cuentaEncontrada == null) {
            $i = 0;
            while ($i < count($this->coleccionCajaAhorro) && $cuentaEncontrada == null) {
                if ($this->coleccionCajaAhorro[$i]->getNumeroCuenta() == $nroCuenta) {
                    $cuentaEncontrada = $this->coleccionCajaAhorro[$i];
                }
                $i++;
            }
        }
        
        // Si se encontró la cuenta, se realiza el depósito
        if ($cuentaEncontrada !== null) {
            $cuentaEncontrada->depositar($monto);
        }
    }

        public function realizarRetiro($nroCuenta, $monto) {
        $cuentaEncontrada = null;
        $i = 0;

        // Buscar en Cuenta Corriente
        while ($i < count($this->coleccionCuentaCorriente) && $cuentaEncontrada == null) {
            if ($this->coleccionCuentaCorriente[$i]->getNumeroCuenta() == $nroCuenta) {
                $cuentaEncontrada = $this->coleccionCuentaCorriente[$i];
            }
            $i++;
        }

        // Si no se encontró en Cuenta Corriente, buscar en Caja de Ahorro
        if ($cuentaEncontrada == null) {
            $i = 0;
            while ($i < count($this->coleccionCajaAhorro) && $cuentaEncontrada == null) {
                if ($this->coleccionCajaAhorro[$i]->getNumeroCuenta() == $nroCuenta) {
                    $cuentaEncontrada = $this->coleccionCajaAhorro[$i];
                }
                $i++;
            }
        }
        
        // Si se encontró la cuenta, se realiza la extraccion
        if ($cuentaEncontrada !== null) {
            $cuentaEncontrada->extraer($monto);
        }
    }
}        