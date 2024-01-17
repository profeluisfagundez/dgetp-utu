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

class RetirosController {
    private $conn; //Atributo que usaramos para trabajar con la conexión de la BD

    public function __construct(){
        //Llamamos al método getInstance (patrón singleton) y obtenemos la conexión a la BD
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();

    }

    public function index(){
        $consulta = $this->conn->prepare("SELECT * from retiros;");
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        require_once("../app/views/retiros/index.php");
    }

    public function create()
    {
        require_once("../app/views/retiros/create.php");
    }

    public function delete()
    {
        require_once("../app/views/ingresos/delete.php");
    }

    public function store($data){
        $consulta = $this->conn->prepare("INSERT INTO retiros(metodo_pago,tipo,fecha_retiro,cantidad,descripcion)
         VALUES (:metodo_pago,:tipo,:fecha_retiro,:cantidad,:descripcion);");
        $consulta->bindValue(":metodo_pago", $data['metodo_pago']); // $_POST["nombre"];
        $consulta->bindValue(":tipo", $data['tipo']);
        $consulta->bindValue(":fecha_retiro", $data['fecha_retiro']);
        $consulta->bindValue(":cantidad", $data['cantidad']);
        $consulta->bindValue(":descripcion", $data['descripcion']);
        $consulta->execute();
        header("location: retiros");
    }

    public function show($id){
        $consulta = $this->conn->prepare("SELECT * FROM retiros WHERE id=:id;");
        $consulta->execute([
            ":id" => $id
        ]);
        $resultados = $consulta->fetch();
        require_once("../app/views/retiros/retiro.php");
    }

    public function edit(){}

    public function update($data, $id){
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
    }
    
    public function destroy($data) {
        $id = $data['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $consulta = $this->conn->prepare("DELETE FROM retiros WHERE id=:id;");
            $consulta->execute([
                ":id" => $id
            ]);
            header("location: /");
        } else {
            echo "Método no permitido";
        } 
    }

    /*public function destroy($id) {
        $consulta = $this->conn->beginTransaction();
        $consulta = $this->conn->prepare("DELETE FROM retiros WHERE id=:id;");
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
    }*/
}

?>