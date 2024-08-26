<?php
// Archivo: Pedido.php

class Pedido {
    private $productos; // Arreglo para almacenar los productos

    // Constructor
    public function __construct() {
        $this->productos = [];
    }

    // Método para agregar un producto al pedido
    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }

    // Método para calcular el total del pedido
    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio() * $producto->getCantidad();
        }
        return $total;
    }

    // Método para obtener todos los productos del pedido
    public function getProductos() {
        return $this->productos;
    }

    // Método para establecer la lista de productos
    public function setProductos(array $productos) {
        $this->productos = $productos;
    }
}
?>
