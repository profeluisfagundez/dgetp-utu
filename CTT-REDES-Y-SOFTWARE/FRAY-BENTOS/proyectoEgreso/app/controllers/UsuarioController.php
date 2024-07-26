<?php

require_once("../app/models/ConexionModel.php");
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
class UsuarioController
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index()
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM usuarios;");
            $consulta->execute();
            $resultados = $consulta->fetchAll();
            foreach ($resultados as $resultado) {
                echo $resultado['id'] . " ";
                echo $resultado['nombre_usuario'] . " ";
                echo $resultado['correo_electronico'] . " ";
                echo $resultado['contrasena'] . " ";
                echo $resultado['nombre_completo'] . " ";
                echo $resultado['fecha_nacimiento'] . " ";
                echo $resultado['numero_telefono'] . " ";
                echo $resultado['creado_en'] . " ";
                echo $resultado['actualizado_en'] . " ";
                echo "<br>\n";
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Error en la conexión: $error";
        }
    }

    public function create()
    {

    }

    public function delete()
    {

    }

    public function store($data)
    {
        try {

        } catch (PDOException $e) {

        }
    }

    public function show($id)
    {
        try {

        } catch (Exception $e) {

        }
    }

    public function edit()
    {
        try {

        } catch (Exception $e) {

        }
    }

    public function update($data)
    {
        try {

        } catch (PDOException $e) {

        }
    }

    public function destroy($data)
    {
        try {

        } catch (PDOException $e) {

        } catch (Exception $e) {

        }
    }
}
