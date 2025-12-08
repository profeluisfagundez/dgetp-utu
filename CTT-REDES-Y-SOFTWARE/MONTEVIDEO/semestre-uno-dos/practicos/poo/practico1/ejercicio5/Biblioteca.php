<?php
require_once('Libro.php');

//Colección de libros
class Biblioteca {
    private $libros = [];

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function listarLibros() {
        $resultado = "<h2>Lista de Libros</h2>";
        foreach ($this->libros as $libro) {
            $resultado .= $libro->__toString();
        }
        return $resultado;
    }

    public function listarObjetosParaDiego() {
        foreach ($this->libros as $libro) {
            echo $libro->__toString();
        }
    }
}
