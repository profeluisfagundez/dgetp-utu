<?php
class JugadorController
{
    private $conexion;

    public function __construct()
    {
        // Obtener la instancia de la conexión
        $this->conexion = ConexionModel::getInstancia()->getConexion();
    }

    /**
     * Crea un nuevo jugador en la base de datos.
     *
     * Esta función inserta un nuevo usuario en la tabla `Usuario` y almacena su información en la
     * tabla `Jugador`. La contraseña se encripta antes de ser almacenada por razones de seguridad.
     *
     * @param string $nombre El nombre del jugador que se va a crear.
     * @param string $contra La contraseña del jugador que se va a crear.
     * @return void
     */
    public function crearJugador(String $nombre, String $contra): void
    {
        // Encriptar la contraseña antes de almacenarla por seguridad
        $contraEncriptada = password_hash($contra, PASSWORD_DEFAULT);
        // Insertar el jugador en la tabla Usuario
        $sqlUsuario = "INSERT INTO Usuario (Nombre) VALUES (?)";
        $stmtUsuario = $this->conexion->prepare($sqlUsuario);
        $stmtUsuario->bind_param('s', $nombre);
        if ($stmtUsuario->execute()) {
            // Obtener el ID del nuevo usuario creado
            $idUsuario = $this->conexion->insert_id;
            // Insertar el ID y la contraseña en la tabla Jugador
            $sqlJugador = "INSERT INTO Jugador (IDUsuario, Contra) VALUES (?, ?)";
            $stmtJugador = $this->conexion->prepare($sqlJugador);
            $stmtJugador->bind_param('is', $idUsuario, $contraEncriptada);
            if ($stmtJugador->execute()) {
                echo "Jugador creado con éxito.";
            } else {
                echo "Error al crear jugador: " . $stmtJugador->error;
            }
            $stmtJugador->close();
        } else {
            echo "Error al crear usuario: " . $stmtUsuario->error;
        }
        $stmtUsuario->close();
    }

    /**
     * Lee la información de un jugador por su ID.
     *
     * Esta función obtiene los datos del jugador (sin mostrar la contraseña) junto con el nombre del usuario
     * asociado y los imprime en pantalla. Si no se encuentra al jugador, muestra un mensaje de error.
     *
     * @param int $idUsuario El ID del jugador que se va a buscar.
     * @return void
     */
    public function leerJugador(int $idUsuario): void
    {
        // Obtener la información del jugador junto con el nombre del Usuario
        $sql = "SELECT u.IDUsuario, u.Nombre 
                FROM Jugador j
                JOIN Usuario u ON j.IDUsuario = u.IDUsuario
                WHERE j.IDUsuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $jugador = $resultado->fetch_assoc();
            echo "ID: " . $jugador['IDUsuario'] . " - Nombre: " . $jugador['Nombre'] . "<br>";
        } else {
            echo "Jugador no encontrado.";
        }
        $stmt->close();
    }

    /**
     * Permite leer todos los jugadores cargados en el sistema
     * 
     * Este método busca en la base de datos todos los jugadores cargados en el sistema y los retorna
     * en un formato de lista
     * @return void
     * 
     */
    public function leerJugadores(): void 
    {
        // Obtener la información del jugador junto con el nombre del Usuario
        $sql = "SELECT u.IDUsuario, u.Nombre FROM Jugador j JOIN Usuario u ON j.IDUsuario = u.IDUsuario";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            // Mostrar los datos de cada fila
            while ($jugador = $resultado->fetch_assoc()) {
                echo "ID: " . $jugador['IDUsuario'] . " - Nombre: " . $jugador['Nombre'] . "<br>";
            }
        } else {
            echo "No hay jugadores cargados en el sistema.";
        }
    }
    

    /**
     * Actualiza la información del jugador en la base de datos.
     *
     * Esta función permite actualizar el nombre de un jugador y, opcionalmente, su contraseña.
     * Si se proporciona una nueva contraseña, se encripta antes de ser almacenada en la base de datos.
     *
     * @param int $idUsuario El ID del jugador que se va a actualizar.
     * @param string $nombre El nuevo nombre del jugador.
     * @param string|null $contra La nueva contraseña del jugador (opcional).
     * @return void
     */
    public function actualizarJugador(int $idUsuario, String $nombre, String $contra = null): void
    {
        // Actualizar el nombre en la tabla Usuario
        $sqlUsuario = "UPDATE Usuario SET Nombre = ? WHERE IDUsuario = ?";
        $stmtUsuario = $this->conexion->prepare($sqlUsuario);
        $stmtUsuario->bind_param('si', $nombre, $idUsuario);
        if ($stmtUsuario->execute()) {
            echo "Nombre actualizado con éxito.<br>";
        } else {
            echo "Error al actualizar el nombre: " . $stmtUsuario->error;
        }
        // Si se proporcionó una nueva contraseña, también la actualizamos
        if ($contra !== null) {
            $contraEncriptada = password_hash($contra, PASSWORD_DEFAULT);
            $sqlJugador = "UPDATE Jugador SET Contra = ? WHERE IDUsuario = ?";
            $stmtJugador = $this->conexion->prepare($sqlJugador);
            $stmtJugador->bind_param('si', $contraEncriptada, $idUsuario);
            if ($stmtJugador->execute()) {
                echo "Contraseña actualizada con éxito.";
            } else {
                echo "Error al actualizar la contraseña: " . $stmtJugador->error;
            }
            $stmtJugador->close();
        }
        $stmtUsuario->close();
    }

    /**
     * Elimina un jugador de la base de datos.
     *
     * Esta función elimina primero el registro del jugador de la tabla Jugador
     * y luego de la tabla Usuario. Si no se encuentra el jugador, se mostrará
     * un mensaje de error correspondiente.
     *
     * @param int $idUsuario El ID del jugador que se va a eliminar.
     * @return void
     */
    public function eliminarJugador(int $idUsuario): void
    {
        // Primero eliminar de la tabla Jugador
        $sqlJugador = "DELETE FROM Jugador WHERE IDUsuario = ?";
        $stmtJugador = $this->conexion->prepare($sqlJugador);
        $stmtJugador->bind_param('i', $idUsuario);
        if ($stmtJugador->execute()) {
            // Luego eliminar de la tabla Usuario
            $sqlUsuario = "DELETE FROM Usuario WHERE IDUsuario = ?";
            $stmtUsuario = $this->conexion->prepare($sqlUsuario);
            $stmtUsuario->bind_param('i', $idUsuario);
            if ($stmtUsuario->execute()) {
                echo "Jugador eliminado con éxito.";
            } else {
                echo "Error al eliminar usuario: " . $stmtUsuario->error;
            }
            $stmtUsuario->close();
        } else {
            echo "Error al eliminar jugador: " . $stmtJugador->error;
        }
        $stmtJugador->close();
    }

    /**
     * Verifica la contraseña de un jugador.
     *
     * Esta función comprueba si la contraseña ingresada por el jugador
     * coincide con la contraseña almacenada en la base de datos.
     * Si el jugador no existe, se muestra un mensaje correspondiente.
     *
     * @param int $idUsuario El ID del jugador cuyo contraseña se desea verificar.
     * @param string $contraIngresada La contraseña ingresada por el jugador para la verificación.
     * @return bool
     */
    public function verificarContra(int $idUsuario, String $contraIngresada): bool
    {
        // Obtener la contraseña almacenada en la base de datos
        $existe = false;
        $sql = "SELECT Contra FROM Jugador WHERE IDUsuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('i', $idUsuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $jugador = $resultado->fetch_assoc();
            $contraseñaAlmacenada = $jugador['Contra'];
            // Verificar si la contraseña ingresada coincide con la almacenada
            if (password_verify($contraIngresada, $contraseñaAlmacenada)) {
                $existe = true; 
            } else {
                $existe = false;
            }
        } else {
            return false;
        }
        $stmt->close();
        return $existe;
    }
}
