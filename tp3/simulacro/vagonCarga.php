<?php

include_once "vagon.php";




class VagonCarga extends Vagon{

    public $pesoMaximoTransporte;
    public $pesoCargaTransportada;

    public function __construct($pesoMaximoTransporte,$pesoCargaTransportada,$añoInstalacion,$largoVagon,$anchoVagon,$pesoVagonVacio){
        parent::__construct($añoInstalacion,$largoVagon,$anchoVagon,$pesoVagonVacio);
        $this->pesoMaximoTransporte = $pesoMaximoTransporte;
        $this->pesoCargaTransportada = $pesoCargaTransportada;
    }


    public function getPesoMaximoTransporte()
    {
        return $this->pesoMaximoTransporte;
    }


    public function setPesoMaximoTransporte($pesoMaximoTransporte)
    {
        $this->pesoMaximoTransporte = $pesoMaximoTransporte;

        return $this;
    }


    public function getPesoCargaTransportada()
    {
        return $this->pesoCargaTransportada;
    }


    public function setPesoCargaTransportada($pesoCargaTransportada)
    {
        $this->pesoCargaTransportada = $pesoCargaTransportada;

        return $this;
    }


    public function incorporarCargaVagon($cantCarga){
        $Pudieroncargar = false;
        $CargaMax = $this->getPesoMaximoTransporte();
        $totalCarga = $cantCarga + $this->getPesoCargaTransportada();
        if($totalCarga<$CargaMax){
            $this->setPesoCargaTransportada($totalCarga);
            $Pudieroncargar = true;
        }
        else{
            $Pudieroncargar = false;
        }
        return $Pudieroncargar;
    }



    public function calcularPesoVagon(){
        return $this->getPesoVagonVacio() + $this->getPesoCargaTransportada() + ($this->getPesoCargaTransportada() * 0.2);
    }



    public function __toString()
    {
    return    parent::__toString() . " Peso maximo a transportar: " . $this->getPesoMaximoTransporte() . " Peso de la carga transportada: " . $this->getPesoCargaTransportada();
    }
}