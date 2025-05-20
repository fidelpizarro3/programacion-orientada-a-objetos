<?php

class Locomotora{

    public $pesoLocomotora;
    public $velocidadMaxima;

    public function __construct($pesoLocomotora,$velocidadMaxima){
        $this->pesoLocomotora = $pesoLocomotora;
        $this->velocidadMaxima = $velocidadMaxima;

        
    }

    /**
     * Get the value of pesoLocomotora
     */ 
    public function getPesoLocomotora()
    {
        return $this->pesoLocomotora;
    }

    /**
     * Set the value of pesoLocomotora
     *
     * @return  self
     */ 
    public function setPesoLocomotora($pesoLocomotora)
    {
        $this->pesoLocomotora = $pesoLocomotora;

        return $this;
    }

    /**
     * Get the value of velocidadMaxima
     */ 
    public function getVelocidadMaxima()
    {
        return $this->velocidadMaxima;
    }

    /**
     * Set the value of velocidadMaxima
     *
     * @return  self
     */ 
    public function setVelocidadMaxima($velocidadMaxima)
    {
        $this->velocidadMaxima = $velocidadMaxima;

        return $this;
    }


    public function __toString()
    {
        return " Peso de la locomotora: " . $this->getPesoLocomotora() . " Toneladas \n" . " Velocidad maxima: " . $this->getVelocidadMaxima() . " Km/h";
    }
}