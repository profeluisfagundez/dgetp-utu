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
class RetirosController
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index()
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM retiros;");
            $consulta->execute();
            $resultados = $consulta->fetchAll();
            require_once("../app/views/retiros/index.php");
        } catch (PDOException $e) {
            echo "Error al obtener la lista de retiros: " . $e->getMessage();
        }
    }

    public function create()
    {
        require_once("../app/views/retiros/create.php");
    }

    public function delete()
    {
        require_once("../app/views/ingresos/delete.php");
    }

    public function store($data)
    {
        try {
            $consulta = $this->conn->prepare("INSERT INTO retiros(metodo_pago, tipo, fecha_retiro, cantidad, descripcion) VALUES (:metodo_pago, :tipo, :fecha_retiro, :cantidad, :descripcion);");
            $consulta->bindValue(":metodo_pago", $data['metodo_pago']);
            $consulta->bindValue(":tipo", $data['tipo']);
            $consulta->bindValue(":fecha_retiro", $data['fecha_retiro']);
            $consulta->bindValue(":cantidad", $data['cantidad']);
            $consulta->bindValue(":descripcion", $data['descripcion']);
            $consulta->execute();
            header("location: retiros");
        } catch (PDOException $e) {
            echo "Error al almacenar el retiro: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM retiros WHERE id=:id;");
            $consulta->execute([
                ":id" => $id
            ]);
    
            // Verificamos si se encontraron resultados pedidos en la vista 
            $resultados = $consulta->fetch();
            if (!$resultados) {
                //Lanzamos una excepción zuculenta si no existe el valor
                throw new Exception("No se encontró el dato con ID: $id");
            }
            require_once("../app/views/retiros/retiro.php");
        } catch (Exception $e) {
            // Se captura la excepción
            echo "Se ha producido una excepción: " . $e->getMessage();
        }
    }

    public function edit()
    {
        // Método no implementado xd
    }

    public function update($data, $id)
    {
        try {
            $consulta = $this->conn->prepare("UPDATE retiros SET 
            metodo_pago = :metodo_pago,
            tipo = :tipo,
            fecha_retiro = :fecha_retiro,
            cantidad = :cantidad,
            descripcion = :descripcion WHERE id=:id;");
            $consulta->execute([
                ":id" => $id,
                ":metodo_pago" => $data['metodo_pago'],
                ":tipo" => $data['tipo'],
                ":fecha_retiro" => $data['fecha_retiro'],
                ":cantidad" => $data['cantidad'],
                ":descripcion" => $data['descripcion'],
            ]);
        } catch (PDOException $e) {
            echo "Error al actualizar el retiro: " . $e->getMessage();
        }
    }

    public function destroy($data)
    {
        $id = $data['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $consulta = $this->conn->prepare("DELETE FROM retiros WHERE id=:id;");
                $consulta->execute([":id" => $id]);
                header("location: /");
            } catch (PDOException $e) {
                echo "Error al eliminar el retiro: " . $e->getMessage();
            }
        } else {
            echo "Método no permitido";
        }
    }
}
?>