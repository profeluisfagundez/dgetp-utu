<?php
require_once("../../app/models/ConexionModel.php");

/**
 * Los 7 métodos que suelen tener los controladores:
 * index: muestra la lista de todos los recursos.
 * create: muestra un formulario para ingresar un nuevo recurso. (luego manda a llamar al método store).
 * store: registra dentro de la base de datos el nuevo recurso.
 * show: muestra un recurso específico.
 * edit: muestra un formulario para editar un recurso. (luego manda a llamar al método update).
 * update: actualiza el recurso dentro de la base de datos.
 * destroy: elimina un recurso.
 */
class LoginController
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index() { }
    public function create() { }
    public function delete() { }
    public function store($data) { }
    public function show($id) { }
    public function edit($id) { }
    public function update($data) { }
    public function destroy($data) { }

    public function userExists($data) {
        try{
            $nombre = $data['username'];
            $password = $data['password'];
            $role = $data['role'];
            if ($role == "usuario") {
                $consulta = $this->conn->prepare("SELECT contrasena FROM usuarios WHERE nombre_usuario = :nombre;");
                $consulta->execute([":nombre" => $nombre]);
                $resultados = $consulta->fetch();
                if ($resultados && $password == $resultados['contrasena']) {
                    require_once("../views/usuarios/index.php");
                    exit();
                }
            } elseif ($role == "administrador") {
                $consulta = $this->conn->prepare("SELECT contrasena FROM administradores WHERE nombre_usuario = :nombre;");
                $consulta->execute([":nombre" => $nombre]);
                $resultados = $consulta->fetch();
                if ($resultados && $password == $resultados['contrasena']) {
                    require_once("../views/administrador/index.php");
                    exit();
                }
            } else {
                require_once("../../public/index.php");
                exit();
            }
        }catch(PDOException $e){
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }



}