<?php
class Medico extends Persona {

    private $codigo_area;
    private $especialidad;

    public function __construct(String $ci,String $nombre, String $apellido,String $codigoArea, String $especialidad){
        parent::__construct($ci,$nombre,$apellido);
        $this->codigo_area = $codigoArea;
        $this->especialidad = $especialidad;
    }

    public function getCodigoArea():String{
        return $this->codigo_area;
    }

    public function setCodigoArea(String $value):void{
        $this->codigo_area = $value;
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