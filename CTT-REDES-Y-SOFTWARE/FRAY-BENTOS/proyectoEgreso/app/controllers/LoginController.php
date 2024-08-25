<?php
session_start();
require_once __DIR__ . '/../models/ConexionModel.php';

class LoginController
{
    private $conn;
    private static $instance;

    private function __construct()
    {
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function index() {}
    public function create() {}
    public function delete() {}
    public function store($data) {}
    public function show($id) {}
    public function edit($id) {}
    public function update($data) {}
    public function destroy($data) {}

    public function logInPage($data)
    {
        try {
            $nombre = $data['username'];
            $password = $data['password'];
            $role = $data['role'];

            if ($role == "usuario") {
                $consulta = $this->conn->prepare("SELECT contrasena FROM usuarios WHERE nombre_usuario = :nombre;");
                $consulta->execute([":nombre" => $nombre]);
                $resultados = $consulta->fetch();

                if ($resultados && $password == $resultados['contrasena']) {
                    $_SESSION['usuario'] = ["username" => $nombre, "role" => $role];
                    header('Location: ../views/usuarios/startPage.php');
                    exit();
                } else {
                    //echo "<p>El usuario no existe</p>";
                    header('Location: ../../public/index.php?error=1');
                }
            } elseif ($role == "administrador") {
                $consulta = $this->conn->prepare("SELECT contrasena FROM administradores WHERE nombre_usuario = :nombre;");
                $consulta->execute([":nombre" => $nombre]);
                $resultados = $consulta->fetch();

                if ($resultados && $password == $resultados['contrasena']) {
                    $_SESSION['usuario'] = ["username" => $nombre, "role" => $role];
                    header('Location: ' . dirname(__DIR__) . '/views/administradores/startPage.php');
                    exit();
                } else {
                    header('Location: ../../public/index.php?error=1');
                }
            } else {
                header('Location: ../../public/index.php?error=2');
                exit();
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            require_once __DIR__ . '/../exceptions/error.php';
        }
    }

    public function checkUserLoggedIn()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ../../../public/index.php');
            exit();
        }
    }

    public function logOut()
    {
        session_destroy();
        //header('Location: ' . dirname(dirname(__DIR__)) . '/public/index.php');
        header('Location: ../../public/index.php');
        exit();
    }
}
