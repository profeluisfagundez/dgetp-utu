<?php
require_once('Libro.php');

class Biblioteca {
    public $libros = [];

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function listarLibros() {
        $resultado = "<h2>Lista de Libros</h2>";
        foreach ($this->libros as $libro) {
            $resultado .= $libro->mostrarInformacion();
        }
        return $resultado;
    }
}
