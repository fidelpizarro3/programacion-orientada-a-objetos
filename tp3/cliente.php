<?php

include_once "persona.php";

class Cliente extends persona{

    private $nroCLiente;

    public function __construct($numeroCliente,$nombrePsna, $apellidoPsna, $tipoDoc, $nroDoc){
        parent::__construct($nombrePsna, $apellidoPsna, $tipoDoc, $nroDoc);
        $this->nroCLiente = $numeroCliente;
    }

    
    
    
    public function getNroCLiente()
    {
        return $this->nroCLiente;
    }
    
    
    public function setNroCLiente($nroCLiente)
    {
        $this->nroCLiente = $nroCLiente;
        
        return $this;
    }
    
        public function __toString()
        {
            return "Nro cliente: " . $this->getNroCLiente(). parent::__toString();
        }

    }
    $cliente = new Cliente(100," fidel" ," pizarro" ," dni", 45979584);
    echo $cliente;
