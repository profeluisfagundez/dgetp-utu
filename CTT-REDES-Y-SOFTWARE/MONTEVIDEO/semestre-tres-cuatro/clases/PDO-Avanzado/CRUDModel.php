<?php

require_once __DIR__ . '/ConexionModel.php';

class CRUDModel
{

  private static ?CRUDModel $instancia = null;
  private PDO $con;

  // Constructor privado para evitar creación de instancias directamente
  private function __construct()
  {
    $this->con = ConexionModel::getConexion();
  }


  //Método Singleton para obtener la única instancia de CRUDModel como vimos en clase.
  public static function getInstance(): CRUDModel
  {
    if (self::$instancia === null) {
      self::$instancia = new CRUDModel();
    }
    return self::$instancia;
  }

  //Obtiene todos los usuarios de la base de datos y los retorna en un array por el FETCH_ASSOC.
  public function obtenerTodosLosTrabajadores(): array
  {
    $sql = "SELECT * FROM trabajador";
    $stmt = $this->con->query($sql);
    return $stmt->fetchAll();
  }

  // Alta de un nuevo trabajador en la base de datos.
  public function altaTrabajador(Trabajador $trabajador): bool
  {
    try {
      $this->con->beginTransaction();

      $sql = "INSERT INTO trabajador (ci, nombre, apellido, direccion, email, celular)
              VALUES (:ci, :nombre, :apellido, :direccion, :email, :celular)";
      $stmt = $this->con->prepare($sql);

      // Primero guardamos los valores en variables para evitar un 
      //'Only variables should be passed by reference'
      $ci = $trabajador->getCi();
      $nombre = $trabajador->getNombre();
      $apellido = $trabajador->getApellido();
      $direccion = $trabajador->getDireccion();
      $email = $trabajador->getEmail();
      $celular = $trabajador->getCelular();

      // Luego las pasamos como referencia a bindParam 
      $stmt->bindParam(':ci', $ci);
      $stmt->bindParam(':nombre', $nombre);
      $stmt->bindParam(':apellido', $apellido);
      $stmt->bindParam(':direccion', $direccion);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':celular', $celular);

      $stmt->execute();
      $this->con->commit();
      return true;
    } catch (PDOException $ex) {
      $this->con->rollback();
      return false;
    }
  }

  // Verifica si un trabajador existe en la base de datos
  public function existeTrabajador(string $ci): bool
  {
    $sql = "SELECT 1 FROM trabajador WHERE ci = :ci LIMIT 1";
    $stmt = $this->con->prepare($sql);
    $stmt->bindParam(':ci', $ci);
    $stmt->execute();
    return (bool) $stmt->fetchColumn();
  }

  // Obtiene un trabajador por su cédula
  public function obtenerTrabajadorPorCi(string $ci): ?array
  {
    $sql = "SELECT * FROM trabajador WHERE ci = :ci";
    $stmt = $this->con->prepare($sql);
    $stmt->bindParam(':ci', $ci);
    $stmt->execute();
    return $stmt->fetch() ?: null;
  }

  // Elimina un trabajador de la base de datos
  public function eliminarTrabajador(string $ci): bool
  {
    if (!$this->existeTrabajador($ci)) return false;

    try {
      $this->con->beginTransaction();
      $sql = "DELETE FROM trabajador WHERE ci = :ci";
      $stmt = $this->con->prepare($sql);
      $stmt->bindParam(':ci', $ci);
      $stmt->execute();
      $this->con->commit();
      return true;
    } catch (PDOException $ex) {
      $this->con->rollback();
      return false;
    }
  }

  //Actualizamos los datos de un trabajador en la base de datos.
  public function actualizarTrabajador(Trabajador $trabajador): bool
  {
    try {
      $this->con->beginTransaction();

      $sql = "UPDATE trabajador 
              SET nombre = :nombre, apellido = :apellido, direccion = :direccion, 
                  email = :email, celular = :celular
              WHERE ci = :ci";
      $stmt = $this->con->prepare($sql);

      // Guardar valores en variables antes de pasarlos por referencia
      // Esto evitar errores posibles en pantalla como por ejemplo el de referencia al 
      // Pasarle un objeto
      $ci = $trabajador->getCi();
      $nombre = $trabajador->getNombre();
      $apellido = $trabajador->getApellido();
      $direccion = $trabajador->getDireccion();
      $email = $trabajador->getEmail();
      $celular = $trabajador->getCelular();

      $stmt->bindParam(':ci', $ci);
      $stmt->bindParam(':nombre', $nombre);
      $stmt->bindParam(':apellido', $apellido);
      $stmt->bindParam(':direccion', $direccion);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':celular', $celular);

      $stmt->execute();
      $this->con->commit();
      return true;
    } catch (PDOException $ex) {
      $this->con->rollback();
      return false;
    }
  }

}
