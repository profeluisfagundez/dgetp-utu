<?php class Persona {

private $ci;
private $nombre;
private $apellido; 

//Método constructor de la clase Persona
function __construct(string $ciU, string $nombreU, string $apellidoU){
    $this->ci = $ciU;
    $this->nombre = $nombreU;
    $this->apellido = $apellidoU;
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
    return "CI: {$this->getCi()} Nombre: {$this->getNombre()} Apellido: {$this->getApellido()}";
}

}
