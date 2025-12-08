<?php 

class Persona {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre() : String {
        return $this->nombre;
    }

    public function setNombre($value) : void {
        $this->nombre = $value;
    }

    public function getApellido() : String {
        return $this->apellido;
    }

    public function setApellido($value) : void {
        $this->apellido = $value;
    }

    public function __toString(){
        return "Nombre: {$this->nombre}, Apellido: {$this->apellido}";
    }

    public function saludar():String{
        return "saludos hehe";
    }
}

?>