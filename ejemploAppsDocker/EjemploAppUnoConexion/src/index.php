<?php
// Configuración de la base de datos (Usaremos el nombre del contenedor 'mi-db')
$host = 'mi-db'; // ¡Esto funciona por el DNS de Docker!
$user = 'root';
$password = '1234'; // La misma que colocamos en el docker run
$dbname = 'test_db';

// Intentar conectar a MySQL
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $message = "✅ ¡Conexión a MySQL exitosa!";
} catch(PDOException $e) {
    $message = "❌ Error de conexión: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Probando PHP y MySQL</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Probando la conexión a la Base de Datos</h1>
    <p class="<?php echo (strpos($message, '✅') !== false ? 'success' : 'error'); ?>">
        <?php echo $message; ?>
    </p>
    <a href="index.html">Volver al inicio</a>
</body>
</html>