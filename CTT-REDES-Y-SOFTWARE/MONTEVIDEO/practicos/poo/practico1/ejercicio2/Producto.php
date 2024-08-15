<?php 

class Producto {
    private $nombre;
    private $precio;
    private $stock;

    public function __construct(String $nombre, String $precio, String $stock)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(String $value){
        $this->nombre = $value;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio(String $value){
        $this->precio = $value;
    }

    public function getStock(){
        return $this->stock;
    }

    public function setStock(String $value){
        $this->stock = $value;
    }
}