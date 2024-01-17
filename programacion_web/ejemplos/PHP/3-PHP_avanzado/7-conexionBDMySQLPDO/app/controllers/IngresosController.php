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
class IngresosController
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index()
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM ingresos;");
            $consulta->execute();
            $resultados = $consulta->fetchAll();
            require_once("../app/views/ingresos/index.php");
        } catch (PDOException $e) {
            echo "Error al obtener la lista de ingresos: " . $e->getMessage();
        }
    }

    public function create()
    {
        require_once("../app/views/ingresos/create.php");
    }

    public function delete()
    {
        require_once("../app/views/ingresos/delete.php");
    }

    public function store($data)
    {
        try {
            $consulta = $this->conn->prepare("INSERT INTO ingresos(metodo_pago, tipo, fecha_ingreso, cantidad, descripcion) VALUES (:metodo_pago, :tipo, :fecha_ingreso, :cantidad, :descripcion);");
            $consulta->bindValue(":metodo_pago", $data['metodo_pago']);
            $consulta->bindValue(":tipo", $data['tipo']);
            $consulta->bindValue(":fecha_ingreso", $data['fecha_ingreso']);
            $consulta->bindValue(":cantidad", $data['cantidad']);
            $consulta->bindValue(":descripcion", $data['descripcion']);
            $consulta->execute();
            header("location: ingresos");
        } catch (PDOException $e) {
            echo "Error al almacenar el ingreso: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM ingresos WHERE id=:id;");
            $consulta->execute([
                ":id" => $id
            ]);
    
            // Verificar si se encontraron resultados
            $resultados = $consulta->fetch();
            if (!$resultados) {
                // Puedes lanzar una excepción personalizada aquí si lo deseas
                throw new Exception("No se encontró el dato con ID: $id");
            }
            // Continuar con el procesamiento normal y mostrar los resultados
            require_once("../app/views/ingresos/ingreso.php");
        } catch (Exception $e) {
            // Manejar la excepción, puedes loguearla, redirigir a una página de error, etc.
            echo "Se ha producido una excepción: " . $e->getMessage();
        }
    }
    

    public function edit()
    {
        // Método no implementado
    }

    public function update($data, $id)
    {
        try {
            $consulta = $this->conn->prepare("UPDATE ingresos SET 
            metodo_pago = :metodo_pago,
            tipo = :tipo,
            fecha_ingreso = :fecha_ingreso,
            cantidad = :cantidad,
            descripcion = :descripcion WHERE id=:id;");
            $consulta->execute([
                ":id" => $id,
                ":metodo_pago" => $data['metodo_pago'],
                ":tipo" => $data['tipo'],
                ":fecha_ingreso" => $data['fecha_ingreso'],
                ":cantidad" => $data['cantidad'],
                ":descripcion" => $data['descripcion'],
            ]);
        } catch (PDOException $e) {
            echo "Error al actualizar el ingreso: " . $e->getMessage();
        }
    }
    
    public function destroy($data)
    {
        $id = $data['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $consulta = $this->conn->prepare("DELETE FROM ingresos WHERE id=:id;");
                $consulta->execute([":id" => $id]);
                header("location: /");
            } catch (PDOException $e) {
                echo "Error al eliminar el ingreso: " . $e->getMessage();
            }
        } else {
            echo "Método no permitido";
        }
    }
}

