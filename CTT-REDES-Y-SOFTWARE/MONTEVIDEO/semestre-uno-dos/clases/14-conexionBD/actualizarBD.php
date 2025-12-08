<?php
$host = 'localhost'; // Servidor de MySQL (en XAMPP es 'localhost')
$usuario = 'root'; // Usuario de MySQL, por defecto en XAMPP es el root 
$password = 'root'; // Contraseña del usuario, en el XAMPP es vacío
$baseDatos = 'ejemplo'; // Nombre de la base de datos para este ejemplo

// Creamos el objeto de conexión
$conexion = new mysqli($host, $usuario, $password, $baseDatos);

$nuevoEmail = "pepe@profeluis.com";
$idUsuario = 2;

$sql = "UPDATE usuarios SET email = ? WHERE id = ?";

// Preparar la sentencia
$stmt = $conexion->prepare($sql);
$stmt->bind_param("si", $nuevoEmail, $idUsuario);

if ($stmt->execute()) {
    echo "Usuario actualizado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close(); // Cerrar el statement
$conexion->close(); // Cerrar la conexión
?>

