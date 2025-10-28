<?php
class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $password = 'root';
    private $baseDatos = 'cartas';
    private static $instancia = null;
    private $conexion;
 
    // Constructor privado para evitar la creación directa de la clase desde fuera
    private function __construct() {
        $this->conectar();
    }
 
    // Método para realizar la conexión a la base de datos
    private function conectar() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->baseDatos);
 
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
 
    // Método público para obtener la instancia única (Singleton) de la clase
    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self(); // Crear la instancia única si no existe
        }
        return self::$instancia;
    }
 
    // Método para obtener la conexión MySQLi
    public function getConexion() {
        return $this->conexion;
    }
 
    // Método para cerrar la conexión (opcional)
    public function cerrarConexion() {
        if ($this->conexion) {
            $this->conexion->close();
            self::$instancia = null; // Resetear la instancia si cerramos la conexión
        }
    }
 
    // Evitar que el objeto sea clonado (parte del patrón Singleton)
    private function __clone() {}
 
    // Evitar que se pueda deserializar (parte del patrón Singleton)
    private function __wakeup() {}
}
?>