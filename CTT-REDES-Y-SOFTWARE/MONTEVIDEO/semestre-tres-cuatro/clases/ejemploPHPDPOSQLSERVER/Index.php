<?php
$serverName = "LAB6-PC03\\MSSQLSERVER2";
$database = "Empresa";
$username = "dba_user";
$password = "Isbo12345";

try {
    $conexion = new PDO("sqlsrv:Server=$serverName;Database=$database;", $username, $password);
    //Encrypt=false;TrustServerCertificate=True
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a SQL Server con PDO.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
