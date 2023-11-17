<?php 

class Persona {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludar():String{
        return "saludos hehe";
    }
}

?>