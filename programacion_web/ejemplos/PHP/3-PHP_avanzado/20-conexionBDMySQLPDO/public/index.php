<?php
/*Front controller:  punto de contacto inicial para recoger las peticiones. 
Delegará en un ApplicationController para manejar la acción y la vista asociad */

require_once("../app/controllers/IngresosController.php");
require_once("../app/controllers/RetirosController.php");
require_once("../app/enums/MetodoPagoEnum.php");
require_once("../app/enums/IngresoTipoEnum.php");
require_once("../app/enums/RetiroTipoEnum.php");
require_once("../routers/RouterHandler.php");

// el operador de fusión ?? asigna lo que venga por defecto del método get, en caso de no tener nada
//Asigna un valor vacio
$slug = $_GET["slug"] ?? "";
//Explode genera un array con el contenido de slug, usa como separador el simbolo de /
$slug = explode("/", $slug);
//Verificamos que la primer parte del array de slug es vacia, si lo es se le asigna /
// En caso de no ser vacio, a la variable $resource se le asigna la primer parte del array
$resource = $slug[0] == "" ? "/" : $slug[0];
//A la variable id se le asigna el segundo valor del arreglo slug, en caso de ser vacio se le asigna null
$id = $slug[1] ?? null;
$router = new RouterHandler();

switch ($resource) {
    case '/':
        require_once("../app/views/inicio.php");
        break;
    case 'ingresos': {
        $method = $_POST['_method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(IngresosController::class, $id);
        break;
    }
    case 'retiros':
        $method = $_POST['_method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(RetirosController::class, $id);
        break;
    
    default:
        require_once("../app/exceptions/404.php");
        break;
}

?>