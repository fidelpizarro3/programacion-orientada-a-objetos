<?php


class persona {


    private $nombre;
    private $apellido;

    private $nroDocumento;

    public  function __construct($nombrePsna, $apellidoPsna, $nroDoc){
        $this->nombre = $nombrePsna;
        $this->apellido = $apellidoPsna;
        $this->nroDocumento = $nroDoc;

    }
        //GETTERS
        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
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

        public function setNumeroDocumento($documento){
            $this->nroDocumento = $documento;
        }

        public function __toString()
        {
            return "Nombre: " . $this->getNombre() . " Apellido: " . $this->getApellido() . " Numero de documento: " . $this->getNroDocumento();
        }
}
