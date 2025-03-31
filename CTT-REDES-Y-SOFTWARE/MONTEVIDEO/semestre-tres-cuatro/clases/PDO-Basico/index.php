<?php
$host = "localhost";
$dbname = "ejemplo_pdo";
$user = "root";
$pass = "root";
 
try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

//Insetar un registro en la base de datos********************************************* */
$sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (:nombre, :email, :edad)";
$stmt = $conexion->prepare($sql);
$stmt->execute([
    ":nombre" => "María López",
    ":email" => "maria@example.com",
    ":edad" => 25
]);
echo "Usuario agregado";
//************************************************************ */

// OBtener un solo registro***************************** */
$sql = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $conexion->prepare($sql);
$stmt->execute([":email" => "maria@example.com"]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($usuario);
//************************************************************ */


// Obtener todos los registros******************************** */
$sql = "SELECT * FROM usuarios";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario["nombre"] . "<br>";
}
//************************************************************ */


// Actualizar un registro***************************** */
$sql = "UPDATE usuarios SET edad = :edad WHERE email = :email";
$stmt = $conexion->prepare($sql);
$stmt->execute([
    ":edad" => 35,
    ":email" => "maria@example.com"
]);
echo "Usuario actualizado";
//************************************************************ */

// Eliminar un registro***************************** */
$sql = "DELETE FROM usuarios WHERE email = :email";
$stmt = $conexion->prepare($sql);
$stmt->execute([":email" => "juan@example.com"]);
echo "Usuario eliminado";
//************************************************************ */

?>