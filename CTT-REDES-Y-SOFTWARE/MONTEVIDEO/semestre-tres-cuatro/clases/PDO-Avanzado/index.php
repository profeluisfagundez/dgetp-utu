<?php

require_once __DIR__ . '/CRUDModel.php';
require_once __DIR__ . '/TrabajadorModel.php';

//Creamos un trabajador
$trabador = new TrabajadorModel('48225577', 'Luis', 'Eduardo', 'Regimiento 9 1983', 'luis@utu.com', '099099099');


//Obtener todos los datos desde la BD
$consulta = CRUDModel::getInstance()->obtenerTodosLosUsuarios();
echo "<table border='1'>";
echo "<tr>
        <th>CI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Celular</th>
      </tr>";

foreach ($consulta as $usuario) {
    echo "<tr>
            <td>{$usuario['ci']}</td>
            <td>{$usuario['nombre']}</td>
            <td>{$usuario['apellido']}</td>
            <td>{$usuario['direccion']}</td>
            <td>{$usuario['email']}</td>
            <td>{$usuario['celular']}</td>
          </tr>";
}

echo "</table>";

//Dar de alta un trabajador en el sistema 
$alta = CRUDModel::getInstance()->altaTrabajador($trabador);
if ($alta) {
  echo "Usuario dado de alta";
}else {
  echo "No se pudo dar de alta";
}


$ci = $trabador->getCi();
$existeTrabajador = CRUDModel::getInstance()->existeTrabajador($ci);
if ($existeTrabajador){
  echo "Existe el trabajador";
}else {
  echo "El trabajador no existe";
}


$ci = $trabador->getCi();
$obtenerTrabajador = CRUDModel::getInstance()->obtenerTrabajadorPorCi($ci);
echo "<table border='1'>";
echo "<tr>
  <th>CI</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Dirección</th>
  <th>Email</th>
  <th>Celular</th>
  </tr>";

echo "<tr>
  <td>{$obtenerTrabajador['ci']}</td>
  <td>{$obtenerTrabajador['nombre']}</td>
  <td>{$obtenerTrabajador['apellido']}</td>
  <td>{$obtenerTrabajador['direccion']}</td>
  <td>{$obtenerTrabajador['email']}</td>
  <td>{$obtenerTrabajador['celular']}</td>
  </tr>";


$ci = $trabador->getCi();
$eliminarUsuario = CRUDModel::getInstance()->eliminarTrabajador($ci);
if ($eliminarUsuario){
  echo "Se elimino el trabajador";
}else {
  echo "No se elimino el trabajador o no existe";
}


