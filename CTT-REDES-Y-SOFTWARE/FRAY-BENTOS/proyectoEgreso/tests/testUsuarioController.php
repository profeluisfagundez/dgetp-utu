<?php
//require_once("../app/models/ConexionModel.php");
require_once("../app/controllers/UsuarioController.php");

$ucontroller = new UsuarioController();
//echo "Esto es el método index: <br>";
//$ucontroller->index();
echo "<br>";
echo "Este es el método show con el ID 1: ";
$ucontroller->show(1);

