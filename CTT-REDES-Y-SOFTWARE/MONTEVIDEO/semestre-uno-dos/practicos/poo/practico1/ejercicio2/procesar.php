<?php
require_once("Producto.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nombre = $_POST['nombre']; 
    $precio = $_POST['precio']; 
    $stock = $_POST['stock']; 

    // izquierda: guardamos el espacio en memoria ram para crear el objeto a futuro
    // derecha: creamos el objeto en memoria ram
    $producto = new Producto($nombre, $precio, $stock);
    echo "<p>Modificamos el valor del precio</p>";
    echo "<p>Precio actual</p>";
    echo $producto->getPrecio();
    echo "<p>Precio modificado con el método setPrecio()</p>";
    $producto->setPrecio("100");
    echo "<p>El nuevo valor es: </p>";
    echo $producto->getPrecio();
    echo "<p>Stock actual</p>";
    echo $producto->getStock();
    echo "<p>Stock modificado con el método setStock()</p>";
    $producto->setStock("100");
    echo "<p>El nuevo valor es: </p>";
    echo $producto->getStock();
}

