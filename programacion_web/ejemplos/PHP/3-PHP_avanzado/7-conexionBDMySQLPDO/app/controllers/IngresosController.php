<?php 
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
require_once("../app/models/ConexionModel.php");

class IngresosController {
    private $conn;

    public function __construct(){
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index(){
        $consulta = $this->conn->prepare("SELECT * from ingresos;");
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        foreach ($resultados as $resultado){
            echo "Método de pago: " . $resultado['metodo_pago'] . "<br>";
            echo "Tipo: " . $resultado['tipo'] . "<br>";
            echo "Fecha de ingreso: " . $resultado['fecha_ingreso'] . "<br>";
            echo "Cantidad: " . $resultado['cantidad'] . "<br>";
            echo "Descripción: " . $resultado['descripcion'] . "<br>";
        }
    }

    public function create(){}

    public function store($data){
        $consulta = $this->conn->prepare("INSERT INTO ingresos(metodo_pago,tipo,fecha_ingreso,cantidad,descripcion) VALUES (:metodo_pago,:tipo,:fecha_ingreso,:cantidad,:descripcion);");
        $consulta->bindValue(":metodo_pago", $data['metodo_pago']);
        $consulta->bindValue(":tipo", $data['tipo']);
        $consulta->bindValue(":fecha_ingreso", $data['fecha_ingreso']);
        $consulta->bindValue(":cantidad", $data['cantidad']);
        $consulta->bindValue(":descripcion", $data['descripcion']);
        $consulta->execute();
    }
    public function show($id){
        $consulta = $this->conn->prepare("SELECT * FROM ingresos WHERE id=:id;");
        $consulta->execute([
            ":id" => $id
        ]);
        $resultados = $consulta->fetch();
        echo "DATOS IMPORTANTES DEL ID: " . $id . "<br>";
        echo $resultados['metodo_pago'] . "<br>";
        echo $resultados['tipo'] . "<br>";
        echo $resultados['fecha_ingreso'] . "<br>";
        echo $resultados['cantidad'] . "<br>";
        echo $resultados['descripcion'] . "<br>";
    }

    public function edit(){}

    public function update($data, $id){
        $consulta = $this->conn->prepare("UPDATE ingresos SET 
        metodo_pago = :metodo_pago,
        tipo = :tipo,
        fecha_ingreso = :fecha_ingreso,
        cantidad = :cantidad,
        descripcion = :descripcion WHERE id=:id;");
        $consulta->execute([
            ":id" => $id,
            ":metodo_pago" => $data['metodo_pago'],
            ":tipo", $data['tipo'],
            ":fecha_ingreso", $data['fecha_ingreso'],
            ":cantidad", $data['cantidad'],
            ":descripcion", $data['descripcion'],
        ]);         
    }

    public function destroy($id){
        $consulta = $this->conn->beginTransaction();
        $consulta = $this->conn->prepare("DELETE FROM ingresos WHERE id=:id;");
        $consulta->execute([
            ":id" => $id
        ]); 
        $validar = readline("Esta completamente seguro que desea eliminar el registro?");
        if($validar == 'no') {
            $this->conn->rollBack();
        } elseif($validar == 'si') {
            $this->conn->commit();
        } else {
            echo "Error al procesar la transacción";
        }
    }
}

?>