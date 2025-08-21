<?php

    class PersonaDos {

        //Atributos
        // private, public, protected  
        private $nombre;
        private $apellido;
        private $cedula;

        //Constructor
        public function __construct(String $nombreU, 
        String $apellidoU, String $cedulaU)
        {
            //Atributo de la clase = valor del usuario
            $this->nombre = $nombreU;
            $this->apellido = $apellidoU;
            $this->cedula = $cedulaU;
        }

        //Metodos de la clase
        public function caminar():string {
            return  "Puedes caminar";
        }

        public function saltar():string {
            return  "Puedes saltar";
        }

        public function getNombre():string {
            return $this->nombre;
        }

        public function setNombre(String $value):void {
            $this->nombre = $value;
        }

        public function getApellido():string {
            return $this->apellido;
        }

        public function getCedula():string {
            return $this->cedula;
        }

        // Método mágico para imprimir toda la información de los atributos
        public function __toString()
        {
            return "El nombre es: " . $this->getNombre() . " El appelido es: " . 
            $this->getApellido() . " y la cédula es: " . $this->getCedula();
        }
    }

?>