<?php 

class Persona {

//ATRIBUTOS
private $ci;
private $nombre;
private $apellido; 


function __construct(string $ci, string $nombre, string $apellido){
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

//Método toString de la clase Persona
public function __toString(): string {
    return "CI: {$this->getCi()} 
            Nombre: {$this->getNombre()} 
            Apellido: {$this->getApellido()}";
}

}
