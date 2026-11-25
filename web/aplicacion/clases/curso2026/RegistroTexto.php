<?php

class RegistroTexto{

    private string $_cadena;
    private DateTime $_fechaHora;


    //Constructor
    public function __construct(string $cadena)
    {
        $this->_cadena = $cadena;
        $this->_fechaHora = new DateTime();
    }


    //getters
    public function getCadena(){
        return $this->_cadena;
    }
    public function getFechaHora(){
        return $this->_fechaHora;
    }
}