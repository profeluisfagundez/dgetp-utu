<?php
/*Front controller:  punto de contacto inicial para recoger las peticiones. 
Delegará en un ApplicationController para manejar la acción y la vista asociad */

require_once("../app/controllers/IngresosController.php");
require_once("../app/controllers/RetirosController.php");
require_once("../app/enums/MetodoPagoEnum.php");
require_once("../app/enums/IngresoTipoEnum.php");
require_once("../app/enums/RetiroTipoEnum.php");

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);
$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

switch ($resource) {
    case '/':
        echo "Estás en la página principal";
        break;
    case 'ingresos':
        echo "Estás en Ingresos";
        break;
    case 'retiros':
        echo "Estás en retiros";
        break;
    
    default:
        echo "ERROR 404, no se encuentra la ruta";
        break;
}

?>