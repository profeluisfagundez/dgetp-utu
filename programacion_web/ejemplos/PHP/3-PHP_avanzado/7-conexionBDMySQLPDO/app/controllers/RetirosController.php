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

class RetirosController {
    private $conn;

    public function __construct(){
        $this->conn = ConexionModel::getInstance()->getDatabaseInstance();

    }

    public function index(){
        $consulta = $this->conn->prepare("SELECT * from retiros;");
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        foreach ($resultados as $resultado){
            echo "Método de pago: " . $resultado['metodo_pago'] . "<br>";
            echo "Tipo: " . $resultado['tipo'] . "<br>";
            echo "Fecha de retiro: " . $resultado['fecha_retiro'] . "<br>";
            echo "Cantidad: " . $resultado['cantidad'] . "<br>";
            echo "Descripción: " . $resultado['descripcion'] . "<br>";
        }
    }

    public function create(){}

    public function store($data){
        $consulta = $this->conn->prepare("INSERT INTO retiros(metodo_pago,tipo,fecha_retiro,cantidad,descripcion)
         VALUES (:metodo_pago,:tipo,:fecha_retiro,:cantidad,:descripcion);");
        $consulta->bindValue(":metodo_pago", $data['metodo_pago']); // $_POST["nombre"];
        $consulta->bindValue(":tipo", $data['tipo']);
        $consulta->bindValue(":fecha_retiro", $data['fecha_retiro']);
        $consulta->bindValue(":cantidad", $data['cantidad']);
        $consulta->bindValue(":descripcion", $data['descripcion']);
        $consulta->execute();
    }

    public function show(){
        
    }

    public function edit(){}

    public function update(){}
    
    public function destroy(){}

}

?>