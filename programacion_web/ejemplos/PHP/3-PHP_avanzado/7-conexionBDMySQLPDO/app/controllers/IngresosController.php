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
require_once("app/models/ConexionModel.php");

class IngresosController {
    private $conn;

    public function __construct(){
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();
    }

    public function index(){}

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
    public function show(){}

    public function edit(){}

    public function update(){}

    public function destroy(){}

}

?>