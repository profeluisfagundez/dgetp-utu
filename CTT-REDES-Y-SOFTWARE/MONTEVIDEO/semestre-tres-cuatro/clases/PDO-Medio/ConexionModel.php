<?php
class ConexionModel {
    private $host = 'localhost';
    private $usuario = 'root';
    private $password = 'root';
    private $baseDatos = 'cartas';
    private static $instancia = null; // Singleton
    private $conexion;

    // Constructor privado para evitar instanciación directa
    private function __construct() {
        $this->conectar();
    }

    // Método para establecer la conexión usando PDO
    private function conectar() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->baseDatos};charset=utf8mb4";
            $this->conexion = new PDO($dsn, $this->usuario, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => true
            ]);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    // Método para obtener la instancia única de la clase (Singleton)
    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    // Método para obtener la conexión PDO
    public function getConexion() {
        return $this->conexion;
    }

    // Método para cerrar la conexión (opcional en PDO, pero permite liberar recursos)
    public function cerrarConexion() {
        $this->conexion = null;
        self::$instancia = null;
    }

    // Evitar clonación y deserialización
    private function __clone() {}
    public function __wakeup() {}
}
?>