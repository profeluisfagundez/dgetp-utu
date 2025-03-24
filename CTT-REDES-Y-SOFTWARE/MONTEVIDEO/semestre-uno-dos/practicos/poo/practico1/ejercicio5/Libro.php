<?php
class Libro {
    private $titulo;
    private $autor;
    private $precio;

    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitutlo(String $value){
        $this->titulo = $value;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor(String $value){
        $this->autor = $value;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio(String $value){
        $this->precio = $value;
    }

    public function __toString() {
        return "<p>Título: $this->titulo</p>
                <p>Autor: $this->autor</p>
                <p>Precio: $this->precio USD</p><hr>";
    }
}