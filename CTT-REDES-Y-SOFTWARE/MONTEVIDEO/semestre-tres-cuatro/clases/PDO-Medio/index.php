<?php
require_once "Usuario.php";
 
$usuario = new Usuario();
 
// Agregar usuario
$usuario->agregarUsuario("Carlos Gómez", "carlos@example.com", 40);
 
// Obtener un usuario
$resultado = $usuario->obtenerUsuario("carlos@example.com");
print_r($resultado);
echo "<hr>";
 
// Obtener todos los usuarios
$todos = $usuario->obtenerUsuarios();
foreach ($todos as $user) {
    echo "Nombre: " . $user["nombre"] . "<br>";
}
?>