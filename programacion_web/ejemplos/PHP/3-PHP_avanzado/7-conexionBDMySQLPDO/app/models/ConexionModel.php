<?php

// config.php
define('DB_HOST', 'localhost');
define('DB_NAME', 'finanzas');
define('DB_USER', 'root');
define('DB_PASS', 'root');

class ConexionModel {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->makeConnection();
    }

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getDatabaseInstance() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection = null;
    }

    private function makeConnection() {
        $server = DB_HOST;
        $database = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;

        try {
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $conexion = new PDO("mysql:host=$server;dbname=$database", $username, $password, $options);

            $setnames = $conexion->prepare("SET NAMES 'utf8'");
            $setnames->execute();

            $this->connection = $conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->closeConnection();
    }
}
?>
