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

    public function getNombre():string {
        return $this->nombre;
    }

    public function setNombre(String $value):void {
        $this->nombre = $value;
    }

    public function getPrecio():string {
        return $this->precio;
    }

    public function setPrecio(String $value):void {
        $this->precio = $value;
    }

    public function getStock(): string{
        return $this->stock;
    }

    public function setStock(String $value): void{
        $this->stock = $value;
    }
}