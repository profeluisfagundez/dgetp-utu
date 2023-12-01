<?php 

class ConexionModel {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "finanzas";
    private $charset = "utf8";
    private static $inst = null;
    private $conn;

    private function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=$this->charset", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$inst instanceof self) {
            self::$inst = new self();
        }
        return self::$inst;
    }

    public function query($sql, $params = array()) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function close() {
        $this->conn = null;
    }

    public function beginTransaction() {
        $this->conn->beginTransaction();
    }

    public function commit() {
        $this->conn->commit();
    }

    public function rollback() {
        $this->conn->rollBack();
    }
}
?>
