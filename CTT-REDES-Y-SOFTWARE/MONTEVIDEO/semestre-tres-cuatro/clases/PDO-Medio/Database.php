<?php
class Database {
    private $host = "localhost";
    private $dbname = "ejemplo_pdo";
    private $user = "root";
    private $pass = "root";
    private $conexion;
 
    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4", $this->user, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
 
    public function ejecutar($sql, $params = []) {
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute($params);
    }
 
    public function obtenerUno($sql, $params = []) {
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
    public function obtenerTodos($sql, $params = []) {
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>