<?php
// Archivo: procesarPedido.php

require_once 'Producto.php';
require_once 'Pedido.php';
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear una nueva instancia de Pedido
    $pedido = new Pedido();

    // Obtener datos del formulario
    $nombres = $_POST['nombre'];
    $precios = $_POST['precio'];
    $cantidades = $_POST['cantidad'];

    // Verificar que los arrays de datos tengan la misma longitud
    if (count($nombres) == count($precios) && count($precios) == count($cantidades)) {
        // Crear y agregar productos al pedido
        for ($i = 0; $i < count($nombres); $i++) {
            $producto = new Producto($nombres[$i], $precios[$i], $cantidades[$i]);
            $pedido->agregarProducto($producto);
        }

        // Calcular el total del pedido
        $total = $pedido->calcularTotal();

        // Mostrar el total
        echo "<h1>Total del Pedido</h1>";
        echo "<p>El total del pedido es: $" . number_format($total, 2) . "</p>";
    } else {
        echo "<p>Los datos de los productos no coinciden.</p>";
    }
}
?>
