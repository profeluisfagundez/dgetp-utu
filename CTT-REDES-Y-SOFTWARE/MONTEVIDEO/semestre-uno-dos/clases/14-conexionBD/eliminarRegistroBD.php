<?php
$host = 'localhost'; // Servidor de MySQL (en XAMPP es 'localhost')
$usuario = 'root'; // Usuario de MySQL, por defecto en XAMPP es el root 
$password = 'root'; // Contraseña del usuario, en el XAMPP es vacío
$baseDatos = 'ejemplo'; // Nombre de la base de datos para este ejemplo

// Creamos el objeto de conexión
$conexion = new mysqli($host, $usuario, $password, $baseDatos);

// Verificar que la conexión se realizo
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

$idUsuario = 1;

$sql = "DELETE FROM usuarios WHERE id = ?";

// Preparar la sentencia
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $idUsuario);

if ($stmt->execute()) {
    echo "Usuario eliminado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close(); // Cerrar el statement
$conexion->close(); // Cerrar la conexión