<?php

class Persistencia {
  
  //El objeto $con va a manejar la conexión a BD
  private $con;
  private $DB_HOST = "localhost";
  private $DB_USER = "root";
  private $DB_PASS = "root";
  private $DB_NAME = "usuarios";
  private $CHAR_SET = "UTF8";
 
  //Constructor de la clase
  function __construct() {
    try {
      $this->con = $this->getConnection();
    }
    catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  //Conexón a la BD
  public function getConnection():PDO {
    $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; 
    $pdo = new PDO("mysql:host={$this->DB_HOST};dbname={$this->DB_NAME};charset={$this->CHAR_SET}", $this->DB_USER, $this->DB_PASS, $opt);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  
  //Retorna los registros que están en la tabla usuario de la base de datos
  public function retornarRegistros():PDOStatement{
    $sql = "SELECT * FROM usuario;";
    $registrosBD = $this->con->query($sql);
    return $registrosBD;
  }

  //Permite dar de alta un trabajador en el Sistema
  public function altaUsuario(Trabajador $trabajador):bool {
    $bandera = false;
    try {
      $this->con->beginTransaction();
      $pst = $this->con->prepare("INSERT INTO usuario VALUES(:ci,:nombre,:apellido,:direccion,:email,:celular)");
      $pst->bindParam(':ci', $trabajador->getCi(), PDO::PARAM_STR);
      $pst->bindParam(':nombre', $trabajador->getNombre(), PDO::PARAM_STR);
      $pst->bindParam(':apellido', $trabajador->getApellido(), PDO::PARAM_STR);
      $pst->bindParam(':direccion', $trabajador->getDireccion(), PDO::PARAM_STR);
      $pst->bindParam(':email', $trabajador->getEmail(), PDO::PARAM_STR);
      $pst->bindParam(':celular', $trabajador->getCelular(), PDO::PARAM_STR);
      $pst->execute();
      $this->con->commit();
      $bandera = true; 
    } catch (PDOException $ex) {
      $this->con->rollback();
      echo $ex->getMessage();
      return $bandera;
    }
    return $bandera;
  }

  //Retorna si existe un trabajador en la base de datos
  public function existeTrabajador(String $ci):bool {
    $existe = false; 
    $sql = "SELECT * FROM usuario where ci = '{$ci}';";
    $registrosBD = $this->con->query($sql);
    $registrosBD=$registrosBD->fetch();
    if ($registrosBD){
      $existe = true;
    }
    return $existe;   
  }

  //Retorna un trabajador de la base de datos
  public function retornarRegistro(String $ci):PDOStatement {
    $sql = "SELECT * FROM usuario where ci = '{$ci}';";
    $registrosBD = $this->con->query($sql);
    return $registrosBD;
  }

  //Borrar un trabajador de la base de datos
  public function borrarRegistro(String $ci):bool {
    $val = $this->existeTrabajador($ci);
    $borrado = false;
    if($val){
      try {
        $this->con->beginTransaction();
        $pst = $this->con->prepare("DELETE FROM usuario WHERE ci = :ci");
        $pst->bindParam(":ci", $ci, PDO::PARAM_STR);
        $pst->execute();
        $this->con->commit();
        $borrado = true;
      } catch (PDOException $ex) {
        $this->con->rollback();
        echo $ex->getMessage();
        return $borrado; 
      }
    }
    return $borrado; 
  }

  public function modificarRegistro(Trabajador $trabajador):bool {
    $bandera = false;
    try {
      $this->con->beginTransaction();
      $pst = $this->con->prepare("UPDATE usuario SET nombre=:nombre,apellido=:apellido,direccion=:direccion,email=:email,celular=:celular WHERE ci=:ci");
      $pst->bindParam(':ci', $trabajador->getCi(), PDO::PARAM_STR);
      $pst->bindParam(':nombre', $trabajador->getNombre(), PDO::PARAM_STR);
      $pst->bindParam(':apellido', $trabajador->getApellido(), PDO::PARAM_STR);
      $pst->bindParam(':direccion', $trabajador->getDireccion(), PDO::PARAM_STR);
      $pst->bindParam(':email', $trabajador->getEmail(), PDO::PARAM_STR);
      $pst->bindParam(':celular', $trabajador->getCelular(), PDO::PARAM_STR);
      $pst->execute();
      $this->con->commit();
      $bandera = true; 
    } catch (PDOException $ex) {
      $this->con->rollback();
      echo $ex->getMessage();
      return $bandera;
    }
    return $bandera;
  }
//Fin de la clase  
}
?>
