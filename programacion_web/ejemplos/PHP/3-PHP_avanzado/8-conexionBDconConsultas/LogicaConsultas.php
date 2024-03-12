<?php

class LogicaConsultas
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexion::getInstance()->getDatabaseInstance();
    }

    public function traerRegistros()
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM ingresos;");
            $consulta->execute();
            $resultados = $consulta->fetchAll();
            return $resultados;
        } catch (PDOException $e) {
            echo "Error al obtener la lista de ingresos: " . $e->getMessage();
        }
    }


    public function guardarRegistros($data)
    {
        try {
            $consulta = $this->conn->prepare("INSERT INTO ingresos(metodo_pago, tipo, fecha_ingreso, cantidad, descripcion) VALUES (:metodo_pago, :tipo, :fecha_ingreso, :cantidad, :descripcion);");
            $consulta->bindValue(":metodo_pago", $data['metodo_pago']);
            $consulta->bindValue(":tipo", $data['tipo']);
            $consulta->bindValue(":fecha_ingreso", $data['fecha_ingreso']);
            $consulta->bindValue(":cantidad", $data['cantidad']);
            $consulta->bindValue(":descripcion", $data['descripcion']);
            $consulta->execute();
        } catch (PDOException $e) {
            echo "Error al almacenar el ingreso: " . $e->getMessage();
        }
    }

    public function mostrarUnRegistro($id)
    {
        try {
            $consulta = $this->conn->prepare("SELECT * FROM ingresos WHERE id=:id;");
            $consulta->execute([":id" => $id]);
            $resultados = $consulta->fetch();
            return $resultados;
        } catch (Exception $e) {
            // Se captura la excepción
            echo "Se ha producido una excepción: " . $e->getMessage();
        }
    }

    public function actualizarRegistro($data)
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
        } catch (PDOException $e) {
            echo "Error al actualizar el ingreso: " . $e->getMessage();
        }
    }

    public function eliminarRegistro($id)
    {
        try {
            $consulta = $this->conn->prepare("DELETE FROM ingresos WHERE id=:id;");
            $consulta->execute([":id" => $id]);
        } catch (PDOException $e) {
            echo "Error al eliminar el ingreso: " . $e->getMessage();
        }
    }
}
