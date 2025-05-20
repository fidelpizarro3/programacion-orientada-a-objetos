<?php

class VagonPasajeros extends Vagon{

    public $cantMaxPasajeros;
    public $cantPasajeros;
    public $pesoPromedioPasajeros;

    public function __construct($cantMaxPasajeros,$cantPasajeros,$añoInstalacion,$largoVagon,$anchoVagon,$pesoVagonVacio){
        parent::__construct($añoInstalacion,$largoVagon,$anchoVagon,$pesoVagonVacio);
        $this->cantMaxPasajeros = $cantMaxPasajeros;
        $this->cantPasajeros = $cantPasajeros;
        $this->pesoPromedioPasajeros = 50;
    }

    public function getCantMaxPasajeros()
    {
        return $this->cantMaxPasajeros;
    }

    public function setCantMaxPasajeros($cantMaxPasajeros)
    {
        $this->cantMaxPasajeros = $cantMaxPasajeros;

        return $this;
    }

    public function getCantPasajeros()
    {
        return $this->cantPasajeros;
    }

    public function setCantPasajeros($cantPasajeros)
    {
        $this->cantPasajeros = $cantPasajeros;

        return $this;
    }

    public function getPesoPromedioPasajeros()
    {
        return $this->pesoPromedioPasajeros;
    }


    public function incorporarPasajero($cantPsjIngresan){
        $PudieronSubir = false;
        $CantmaxPsj = $this->getCantMaxPasajeros();
        $totalPasajeros = $cantPsjIngresan + $this->getCantPasajeros();
        if($totalPasajeros<=$CantmaxPsj){
            $this->setCantPasajeros($totalPasajeros);
            $PudieronSubir = true;
        }
        else{
            $PudieronSubir = false;
        }
        return $PudieronSubir;
    }


    public function calcularPesoVagon(){
        return $this->getPesoVagonVacio() + ($this->getCantPasajeros() * $this->getPesoPromedioPasajeros());
    }





    public function __toString()
    {
    return  parent::__toString() . " Cantidad maxima de pasajeros  a transportar: " . $this->getCantMaxPasajeros() . " cantidad de pasajeros a bordo: " . $this->getCantPasajeros() . " Peso promedio de pasajeros " . $this->getPesoPromedioPasajeros() . " KG";
    }
}