<?php

$host = 'localhost'; // Servidor de MySQL (en XAMPP es 'localhost')
$usuario = 'root'; // Usuario de MySQL, por defecto en XAMPP es el root 
$password = 'root'; // Contraseña del usuario, en el XAMPP es vacío
$baseDatos = 'ejemplo'; // Nombre de la base de datos para este ejemplo

// Creamos el objeto de conexión
$conexion = new mysqli($host, $usuario, $password, $baseDatos);

$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar los datos de cada fila
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. 
        " - Email: " . $fila["email"]. "<br>";
    }
} else {
    echo "No se encontraron usuarios.";
}

$conexion->close(); // Cerrar la conexión
?>
