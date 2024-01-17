<?php

require_once("../app/controllers/IngresosController.php");
require_once("../app/controllers/RetirosController.php");
require_once("../app/enums/MetodoPagoEnum.php");
require_once("../app/enums/IngresoTipoEnum.php");
require_once("../app/enums/RetiroTipoEnum.php");

$ingresoController = new IngresosController();
$retiroController = new RetirosController();

/*$ingresoController->store([
    "metodo_pago" => MetodoPagoEnum::CuentaDeBanco->value,
    "tipo" => IngresoTipoEnum::Salario->value,
    "fecha_ingreso" => date("Y-m-d H:i:s"),
    "cantidad" => 60000,
    "descripcion" => "Lucia cobra 60mil dolares por mes"
]);

$retiroController->store([
    "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
    "tipo" => RetiroTipoEnum::Compra->value,
    "fecha_retiro" => date("Y-m-d H:i:s"),
    "cantidad" => 400,
    "descripcion" => "Walter compra un sandwich y estaba rico"
]);*/

/*echo "ACA COMIENZA EL RETIRO <br>";
$retiroController->index();
echo "******************************************************************<br>";
echo "ACA COMIENZA EL INGRESO <br>";
$ingresoController->index();
echo "******************************************************************<br>";
$ingresoController->show("5");
echo "******************************************************************<br>";
*/$ingresoController->destroy(4);

?>