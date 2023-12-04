<?php 

require_once("app/database/ConexionModel.php");

class IngresosController {
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
    public function index(){}
    public function create(){}
    public function store($data){
        $conn = ConexionModel::getInstance()->getDatabaseInstance();
        $consulta = $conn->prepare("INSERT INTO ingreso(metodo_pago,tipo,fecha_retiro,cantidad,descripcion) VALUES (:metodo_pago,:tipo,:fecha_retiro,:cantidad,:descripcion);");
        $consulta->bindParam(":metodo_pago", $data['metodo_pago']);
        $consulta->bindParam(":tipo", $data['tipo']);
        $consulta->bindParam(":fecha_retiro", $data['fecha_retiro']);
        $consulta->bindParam(":cantidad", $data['cantidad']);
        $consulta->bindParam(":descripcion", $data['descripcion']);
        $consulta->execute();
    }
    public function show(){}
    public function edit(){}
    public function update(){}
    public function destroy(){}

}

?>