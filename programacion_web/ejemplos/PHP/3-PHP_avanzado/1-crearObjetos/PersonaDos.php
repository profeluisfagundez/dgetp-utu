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

        public function retornarNombre():string {
            return $this->nombre;
        }
    }

?>