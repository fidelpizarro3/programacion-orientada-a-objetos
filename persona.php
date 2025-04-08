<?php


class persona {


    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $nroDocumento;

    public  function __construct($nombrePsna, $apellidoPsna, $tipoDoc, $nroDoc){
        $this->nombre = $nombrePsna;
        $this->apellido = $apellidoPsna;
        $this->tipoDocumento = $tipoDoc;
        $this->nroDocumento = $nroDoc;

    }
        //GETTERS
        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }
        public function getTipoDococumento(){
            return $this->tipoDocumento;
        }
        public function getNroDocumento(){
            return $this->nroDocumento;
        }

        //SETTERS
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function setTipoDocumento($tipoDoc){
            $this->tipoDocumento = $tipoDoc;
        }
        public function setNumeroDocumento($documento){
            $this->nroDocumento = $documento;
        }

        public function __toString()
        {
            return "Nombre: " . $this->getNombre() . " Apellido: " . $this->getApellido() . " Tipo de documento: " . $this->getTipoDococumento(). " Numero de documento: " . $this->getNroDocumento();
        }
}
