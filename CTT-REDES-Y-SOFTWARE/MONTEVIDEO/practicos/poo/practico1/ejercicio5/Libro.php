<?php
class Libro {
    public $titulo;
    public $autor;
    public $precio;

    public function __construct($titulo, $autor, $precio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function mostrarInformacion() {
        return "<p>Título: $this->titulo</p>
                <p>Autor: $this->autor</p>
                <p>Precio: $this->precio USD</p><hr>";
    }
}