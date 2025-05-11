<?php

include_once "persona.php";


class Cliente extends persona {

    public $numeroCliente;

    public function __construct($numeroCliente,$nombrePsna, $apellidoPsna, $nroDoc){
        parent::__construct($nombrePsna, $apellidoPsna, $nroDoc);
            $this->numeroCliente = $numeroCliente;
        }
}
