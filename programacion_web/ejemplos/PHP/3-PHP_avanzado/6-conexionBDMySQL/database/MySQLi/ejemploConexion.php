<?php

$server = "localhost";
$database = "finanzas";
$username = "root";
$password = "";

//Forma procedimental
//$mysqli = mysqli_connect($server,$username,$password,$database); 
//Comprobar conexión de maneral procedimental
/*if (!$mysqli) {
    die("Fallo la conexión a la base de datos: " . mysqli_connect_errno());
} else {
    echo "Conexión establecida";
}*/
//POO
$mysqli = new mysqli($server,$username,$password,$database); 
//Comprobar conexión usando POO
if($mysqli->errno){
    die("Fallo la conexión a la base de datos: {$mysqli->connect_errno}");
} else {
    echo "Conexión establecida";
}
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();
var_dump($setnames);
?>