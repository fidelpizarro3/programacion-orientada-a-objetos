<?php


class Vagon{

    public $añoInstalacion;
    public $largoVagon;
    public $anchoVagon;
    public $pesoVagonVacio;


    public function __construct($añoInstalacion,$largoVagon,$anchoVagon,$pesoVagonVacio){
        $this->añoInstalacion = $añoInstalacion;
        $this->largoVagon = $largoVagon;
        $this->anchoVagon = $anchoVagon;
        $this->pesoVagonVacio = $pesoVagonVacio;
    }


    public function getAñoInstalacion()
    {
        return $this->añoInstalacion;
    }

    public function setAñoInstalacion($añoInstalacion)
    {
        $this->añoInstalacion = $añoInstalacion;

        return $this;
    }

    public function getLargoVagon()
    {
        return $this->largoVagon;
    }

    public function setLargoVagon($largoVagon)
    {
        $this->largoVagon = $largoVagon;

        return $this;
    }

    public function getAnchoVagon()
    {
        return $this->anchoVagon;
    }

    public function setAnchoVagon($anchoVagon)
    {
        $this->anchoVagon = $anchoVagon;

        return $this;
    }
    public function getPesoVagonVacio()
    {
        return $this->pesoVagonVacio;
    }

    public function setPesoVagonVacio($pesoVagonVacio)
    {
        $this->pesoVagonVacio = $pesoVagonVacio;

        return $this;
    }

    public function calcularPesoVagon(){
        return $this->getPesoVagonVacio();
    }



    public function __toString()
    {
        return "Año instalacion: " . $this->getAñoInstalacion() . " lartgo del vagon: " . $this->getLargoVagon() . " Ancho del vagon: " . $this->getAnchoVagon() . " Peso vagon vacio: " . $this->getPesoVagonVacio() ;
    }
}