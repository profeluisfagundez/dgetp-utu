<?php

class ConexionModel {

  private static ?PDO $instancia = null;

  private function __construct() {}  // Constructor privado

  /**
   * Devuelve la instancia PDO si ya está creada, o la crea si es null.
   */
  private static function getInstance(): void {
    if (self::$instancia === null) {
      $config = require(__DIR__ . '/config.php');
      $dsn = "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']};charset={$config['CHAR_SET']}";
      $opciones = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];
      try {
        self::$instancia = new PDO($dsn, $config['DB_USER'], $config['DB_PASS'], $opciones);
      } catch (PDOException $e) {
        throw new Exception("Error al conectar con la base de datos: " . $e->getMessage());
      }
    }
  }

  /**
   * Método público para acceder a la instancia PDO.
   */
  public static function getConexion(): PDO {
    self::getInstance(); // Asegura que la conexión esté creada
    return self::$instancia;
  }
}
