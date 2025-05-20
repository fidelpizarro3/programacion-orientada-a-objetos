<?php
include_once "vagonCarga.php";
include_once "vagonPasajeros.php";
include_once "vagon.php";

class Formacion{

    public $refLocomotora;
    public $colVagon;
    public $maxCantVagones;

    public function __construct($refLocomotora,$maxCantVagones){
        $this->refLocomotora = $refLocomotora;
        $this->colVagon = [];
        $this->maxCantVagones = $maxCantVagones;

        
    }

    public function getRefLocomotora()
    {
        return $this->refLocomotora;
    }

    public function setRefLocomotora($refLocomotora)
    {
        $this->refLocomotora = $refLocomotora;

        return $this;
    }

    public function getColVagon()
    {
        return $this->colVagon;
    }

    public function setColVagon($colVagon)
    {
        $this->colVagon = $colVagon;

        return $this;
    }

    public function getMaxCantVagones()
    {
        return $this->maxCantVagones;
    }

    public function setMaxCantVagones($maxCantVagones)
    {
        $this->maxCantVagones = $maxCantVagones;

        return $this;
    }



    public function incorporarPasajeroFormacion($cantPsjrs){
        $ColVagon = $this->getColVagon();
        $encontro = false;
        $i = 0;
        while($i<count($ColVagon)&& !$encontro){
        $vagon = $ColVagon[$i];

            if(is_a($vagon, "VagonPasajeros")){
                if($vagon->incorporarPasajero($cantPsjrs)){ //esta funcion me va a retornar true si se pudo agregar pasajero
                    $encontro = true;                       //$encontro no cambia de valor si no se pueden agregar pasajeros
                    }
                }
            $i++;
            }
        return $encontro;
    }


    public function incorporarVagonFormacion($objVagon){
        $seIncorporo = false;
        $colVagon = $this->getColVagon();
        $maxVagones = $this->getMaxCantVagones();

        if(count($colVagon) < $maxVagones){ //con esta funcion verifico si el numero de vagones supera al maximo
                $colVagon[] = $objVagon;    //Si no supera agrego al obj vagon al array
                $this->setColVagon($colVagon);
                $seIncorporo = true;
        }
        return $seIncorporo;
    }

    public function promedioPasajeroFormacion(){
        $colVagon = $this->getColVagon();
        $promedioPasajero = 0;      //inicializo en cero para que si no hay vagones de pasajeros directamente retorne 0
        $totalPasajeros = 0;        //inicializo variables en 0
        $totalVagonesPasajeros = 0;                 
        foreach($colVagon as $vagon){                                                      //recorro la coleccion de vagones y por cada vagon verifico que sean 
            if(is_a($vagon,"VagonPasajeros")){                                              //de la clase VagonPasajeros
            $totalPasajeros = $totalPasajeros + $vagon->getCantPasajeros();
            $totalVagonesPasajeros++;
            }
        }
        if($totalVagonesPasajeros>0){
            $promedioPasajero = $totalPasajeros / $totalVagonesPasajeros;
        }
        return $promedioPasajero;
    }


    public function pesoFormacion(){
        $colVagon = $this->getColVagon();
        $pesoFormacion = 0;
        foreach($colVagon as $vagon){
            $pesoFormacion = $pesoFormacion + $vagon->calcularPesoVagon();
            
        }
        return $pesoFormacion;
    }


    public function retonarVagonSinCompletar(){
        $colVagon = $this->getColVagon();
        $encontro = null;
        $i = 0;
        while($i<count($colVagon) && $encontro == null){
            $vagon = $colVagon[$i];

                if(is_a($vagon, "VagonCarga") && $vagon->getPesoMaximoTransporte() != $vagon->getPesoCargaTransportada()){
                    $encontro = $vagon;
                    
                }
                else if(is_a($vagon,"VagonPasajeros") && $vagon->getCantMaxPasajeros() != $vagon->getCantPasajeros()){
                    $encontro = $vagon;
                }
            $i++;

        }   
        if($encontro == null){
        $encontro = -1;
        }
        return $encontro;
    }



    public function __toString()
    {
        return "Locomotora: " . $this->getRefLocomotora() . " \n Coleccion de vagones: ". $this->getColVagon() ."\n la maxima cantidad de vagones es: " . $this->getMaxCantVagones();
    }
}  