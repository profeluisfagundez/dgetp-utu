<?php

class Trabajador {

    private $ci;
    private $nombre;
    private $apellido;
    private $direccion;
    private $email;
    private $celular;

    function __construct(String $ciU,String $nombreU,String $apellidoU,String $direccionU,String $emailU,String $celularU){
        $this->ci = $ciU;
        $this->nombre = $nombreU;
        $this->apellido = $apellidoU;
        $this->direccion = $direccionU;
        $this->email = $emailU;
        $this->celular = $celularU;
    }

    public function getCi():String{
        return $this->ci;
    }

    public function setCi(String $value):void{
        $this->ci = $value;
    }

    public function getNombre():String{
        return $this->nombre;
    }

    public function setNombre(String $value):void{
        $this->nombre = $value;
    }

    public function getApellido():String{
        return $this->apellido;
    }

    public function setApellido(String $value):void{
        $this->apellido = $value;
    }

    public function getDireccion():String{
        return $this->direccion;
    }

    public function setDireccion(String $value):void{
        $this->direccion = $value;
    }

    public function getEmail():String{
        return $this->email;
    }

    public function setEmail(String $value):void{
        $this->email = $value;
    }

    public function getCelular():String{
        return $this->celular;
    }

    public function setCelular(String $value):void{
        $this->celular = $value;
    }

    public function toString():String{
        return "CI: {$this->getCi()} Nombre: {$this->getNombre()} Apellido: {$this->getApellido()} Dirección: {$this->getDireccion()} Email: {$this->getEmail()} Celular: {$this->getCelular()}";
    }
}

?>