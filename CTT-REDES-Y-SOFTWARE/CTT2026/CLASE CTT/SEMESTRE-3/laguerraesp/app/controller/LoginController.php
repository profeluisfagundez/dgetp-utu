<?php

require_once '../models/ConexionModel.php';
require_once 'JugadorController.php';
session_start();

class LoginController
{
    public function login(String $nombre, String $contraIngresada): void
    {
        if (isset($nombre, $contraIngresada)) {
            // Crear instancia de JugadorController
            $jugadorController = new JugadorController();
            // Buscar el ID del usuario en la tabla Usuario
            $sql = "SELECT IDUsuario FROM Usuario WHERE Nombre = ?";
            $stmt = ConexionModel::getInstancia()->getConexion()->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt->execute();
            $resultado = $stmt->get_result();
            if ($resultado->num_rows > 0) {
                // Obtener el IDUsuario
                $usuario = $resultado->fetch_assoc();
                $idUsuario = $usuario['IDUsuario'];
                // Verificar la contraseña
                if ($jugadorController->verificarContra($idUsuario, $contraIngresada)) {
                    // Almacenar el ID de usuario en la sesión
                    $_SESSION['IDUsuario'] = $idUsuario;
                    $_SESSION['Nombre'] = $nombre;
                    header("Location: ../views/bienvenida.php");
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
    }
}
