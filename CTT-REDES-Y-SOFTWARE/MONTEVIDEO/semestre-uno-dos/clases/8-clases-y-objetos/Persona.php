<?php

class Persona {

    //Publico, Privado, Protegido ->
    private $ci;
    private $nombre;
    private $apellido;

    function __construct($ci, $nombre, $apellido){
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getCi():String{
        return $this->ci;
    }
    
    public function setCi(String $value):void{
        $this->ci = $value;
    }

}

?>