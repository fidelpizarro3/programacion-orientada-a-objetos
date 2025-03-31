<?php


class cafetera{
    private $capacidadMaxima;
    private $cantidadActual;
    private $ultimaCantServida;

    public function __construct($valorCapacidad, $valorCantAct) {
        $this->capacidadMaxima = $valorCapacidad;
        $this->cantidadActual = $valorCantAct;
    }

    public function getCapacidad(){
        return $this->capacidadMaxima;
    }
    public function setCapacidad($valor){
        $this->capacidadMaxima = $valor;
    }
    
    public function getCant(){
        return $this->cantidadActual;
    }
    public function setCant($valor){
        $this->cantidadActual = $valor;
    }

    public function getUltimaCantidadServida(){
        return $this->ultimaCantServida;
    }


    public function llenarCafetera(){
        $this->cantidadActual = $this->capacidadMaxima;
    }

    public function servirTaza($cantidad){
        $vacia = false;
        if($this->cantidadActual>=$cantidad){
            $this->cantidadActual = $this->cantidadActual - $cantidad;
            $this->ultimaCantServida = $cantidad;

            
        }
        else {
            $this->ultimaCantServida = $this->cantidadActual;
            $this->cantidadActual = 0; //la cafetera quedo vacia porque se sirvio todo lo que tenia 
            $vacia = true;
        }
        return $vacia;
    }


    public function vaciarCafetera(){
        $this->setCant(0);
    }


    public function agregarCafe($cantAgregar){
        $cantidadAgregada = $this->cantidadActual + $cantAgregar;
        $rebalsar = false;

        if($cantidadAgregada > 1000){
            $rebalsar = true;
        }
        else {
            $this->cantidadActual = $this->cantidadActual + $cantAgregar;
        }
    return $rebalsar;

    }
}
