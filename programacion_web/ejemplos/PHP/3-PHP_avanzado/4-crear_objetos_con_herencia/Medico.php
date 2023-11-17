<?php
class Medico extends Persona {

    private $codigo_area;
    private $especialidad;

    public function __construct(String $ci_u,String $nombre_u, String $apellido_u,String $codigo_area_u, String $especialidad_u){
        parent::__construct($ci_u,$nombre_u,$apellido_u);
        $this->codigo_area = $codigo_area_u;
        $this->especialidad = $especialidad_u;
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