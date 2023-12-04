<?php 

class ConexionModel {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->makeConnection();
    }

    public static function getInstance() {
        if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function getDatabaseInstance() {
        return $this->connection;
    }

    private function makeConnection() {
        $server = "localhost";
        $database = "finanzas";
        $username = "root";
        $password = "root";
        $conexion = new \PDO("mysql:host=$server;dbname=$database", $username, $password);
        $setnames = $conexion->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        $this->connection = $conexion;
    }
    
}
?>
