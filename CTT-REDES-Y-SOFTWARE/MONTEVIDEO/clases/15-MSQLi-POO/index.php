<?php
require_once 'Conexion.php'; // Incluir la clase Conexion
require_once 'JugadorCRUD.php'; // Incluir la clase JugadorCRUD

$jugadorCRUD = new JugadorCRUD();

// Crear un nuevo jugador
$jugadorCRUD->crearJugador("profeLuisFagundez", "48225577");

// Leer la información del jugador con el ID pasado por parámetro en el método 
$jugadorCRUD->leerJugador(2);

// Actualizar la información del jugador con ID 1
$jugadorCRUD->actualizarJugador(1, "profeLuisFagundez", "48225577");

// Verificar la contraseña del jugador con ID 1
$jugadorCRUD->verificarContraseña(1, "48225577");

$jugadorCRUD->leerJugadores();

// Eliminar un jugador con ID 1
$jugadorCRUD->eliminarJugador(1);
?>
