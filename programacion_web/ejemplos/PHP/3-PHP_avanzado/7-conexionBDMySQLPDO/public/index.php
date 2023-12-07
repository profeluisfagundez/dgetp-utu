<?php
/*Front controller:  punto de contacto inicial para recoger las peticiones. 
Delegará en un ApplicationController para manejar la acción y la vista asociad */

require_once("../app/controllers/IngresosController.php");
require_once("../app/controllers/RetirosController.php");
require_once("../app/enums/MetodoPagoEnum.php");
require_once("../app/enums/IngresoTipoEnum.php");
require_once("../app/enums/RetiroTipoEnum.php");
require_once("../routers/RouterHandler.php");

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);
$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;
$router = new RouterHandler();

switch ($resource) {
    case '/':
        echo "Estás en la página principal";
        break;
    case 'ingresos': {
        $method = $_POST['method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(IngresosController::class, $id);
        break;
    }
    case 'retiros':
        $method = $_POST['method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(RetirosController::class, $id);
        break;
    
    default:
        echo "ERROR 404, no se encuentra la ruta";
        break;
}

?>