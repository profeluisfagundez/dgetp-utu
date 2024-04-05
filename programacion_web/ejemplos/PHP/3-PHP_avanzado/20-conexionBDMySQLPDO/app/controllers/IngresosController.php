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
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
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
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }

    public function show($id)
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM ingresos WHERE id=:id;");
            $consulta->execute([":id" => $id]);
            $resultados = $consulta->fetch();
            if (!$resultados) {
                //Lanzamos una excepción zuculenta si no existe el valor
                throw new Exception("No se encontró el dato con ID: $id");
            }
            require_once("../app/views/ingresos/ingreso.php");
        } catch (Exception $e) {
            // Se captura la excepción
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }

    public function edit()
    {
        try {
            $id = $_GET['slug'];
            $valor = explode("/", $id);
            $id = $valor[2];
            $id = (int) $id;
            $consulta = $this->conn->prepare("SELECT * FROM ingresos WHERE id=:id;");
            $consulta->execute([":id" => $id]);
            $resultados = $consulta->fetch();
            if (!$resultados) {
                //Lanzamos una excepción zuculenta si no existe el valor
                throw new Exception("No se encontró el dato con ID: $id");
            }
            // Acá mostramos el formulario, idem show
            require_once("../app/views/ingresos/edit.php");
        } catch (Exception $e) {
            // Se captura la excepción
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }

    public function update($data)
    {
        try {
            $consulta = $this->conn->prepare("UPDATE ingresos SET 
            metodo_pago = :metodo_pago,
            tipo = :tipo,
            fecha_ingreso = :fecha_ingreso,
            cantidad = :cantidad,
            descripcion = :descripcion WHERE id=:id;");
            $consulta->execute([
                ":id" => $data['id'],
                ":metodo_pago" => $data['metodo_pago'],
                ":tipo" => $data['tipo'],
                ":fecha_ingreso" => $data['fecha_ingreso'],
                ":cantidad" => $data['cantidad'],
                ":descripcion" => $data['descripcion'],
            ]);
            header("location: /ingresos");
            exit;
        } catch (PDOException $e) {
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }

    public function destroy($data)
    {
        $id = $data['id'];
        try {
            $consulta = $this->conn->prepare("DELETE FROM ingresos WHERE id=:id;");
            $consulta->execute([":id" => $id]);
            if ($consulta->rowCount() > 0) {
                header("Location: /");
                exit;
            } else {
                throw new Exception("El registro con ID $id no existe.");
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        } catch (Exception $e) {
            $error = $e->getMessage();
            require_once("../app/exceptions/error.php");
        }
    }
}
