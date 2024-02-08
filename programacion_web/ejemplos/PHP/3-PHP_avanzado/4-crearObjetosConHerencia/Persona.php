<?php 
class Persona {

private $ci;
private $nombre;
private $apellido; 

//Método constructor de la clase Persona
function __construct(string $ci, string $nombre, string $apellido){
    $this->ci = $ci;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
}

//Obtener los datos desde un objeto de la clase Persona
public function getCi():String{
    return $this->ci;
}

//Modificar el dato desde la clase Persona
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
public function toString():String{
    return "CI: {$this->getCi()} Nombre: {$this->getNombre()} Apellido: {$this->getApellido()}";
}

}

?>