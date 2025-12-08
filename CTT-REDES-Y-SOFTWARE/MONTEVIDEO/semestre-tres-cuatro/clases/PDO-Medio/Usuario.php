<?php
require_once "Database.php";
 
class Usuario {
    private $db;
 
    public function __construct() {
        $this->db = new Database();
    }
 
    public function agregarUsuario($nombre, $email, $edad) {
        $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES (:nombre, :email, :edad)";
        return $this->db->ejecutar($sql, [":nombre" => $nombre, ":email" => $email, ":edad" => $edad]);
    }
 
    public function obtenerUsuario($email) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        return $this->db->obtenerUno($sql, [":email" => $email]);
    }
 
    public function obtenerUsuarios() {
        $sql = "SELECT * FROM usuarios";
        return $this->db->obtenerTodos($sql);
    }
}
?>