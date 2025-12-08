<?php
class Medico extends Persona {

    private $codigoArea;
    private $especialidad;

    public function __construct(String $ci,String $nombre, String $apellido,String $codigoArea, String $especialidad){
        parent::__construct($ci,$nombre,$apellido);
        $this->codigoArea = $codigoArea;
        $this->especialidad = $especialidad;
    }

    public function getCodigoArea():String{
        return $this->codigoArea;
    }

    public function setCodigoArea(String $value):void{
        $this->codigoArea = $value;
    }

    public function getEspecialidad():String{
        return $this->especialidad;
    }

    public function setEspecialidad(String $value):void{
        $this->especialidad = $value;
    }

    public function toString():String{
        return "CI: {$this->getCi()} Nombre: {$this->getNombre()} Apellido: {$this->getApellido()} Código de área: {$this->getCodigoArea()} Especialidad: {$this->getEspecialidad()}";
    }
}

?>