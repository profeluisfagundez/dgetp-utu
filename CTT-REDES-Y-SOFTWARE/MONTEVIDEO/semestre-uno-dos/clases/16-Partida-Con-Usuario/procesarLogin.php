<?php
require_once 'Conexion.php';
require_once 'JugadorCRUD.php';

session_start();

if (isset($_POST['nombre'], $_POST['contra'])) {
    $nombre = $_POST['nombre'];
    $contraIngresada = $_POST['contra'];

    // Crear instancia de JugadorCRUD
    $jugadorCRUD = new JugadorCRUD();

    // Buscar el ID del usuario en la tabla Usuario
    $sql = "SELECT IDUsuario FROM Usuario WHERE Nombre = ?";
    $stmt = Conexion::getInstancia()->getConexion()->prepare($sql);
    $stmt->bind_param('s', $nombre);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Obtener el IDUsuario
        $usuario = $resultado->fetch_assoc();
        $idUsuario = $usuario['IDUsuario'];
        
        // Verificar la contraseña
        if ($jugadorCRUD->verificarContra($idUsuario, $contraIngresada)) {
            // Almacenar el ID de usuario en la sesión
            $_SESSION['IDUsuario'] = $idUsuario;
            header("Location: bienvenida.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
    $stmt->close();
} else {
    echo "Por favor, complete todos los campos.";
}
?>
