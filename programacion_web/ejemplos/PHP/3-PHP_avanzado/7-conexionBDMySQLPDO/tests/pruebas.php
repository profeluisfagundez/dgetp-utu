<?php

require_once("../app/controllers/IngresosController.php");
require_once("../app/controllers/RetirosController.php");
require_once("../app/enums/MetodoPagoEnum.php");
require_once("../app/enums/IngresoTipoEnum.php");
require_once("../app/enums/RetiroTipoEnum.php");

$ingresoController = new IngresosController();
$ingresoController->store([
    "metodo_pago" => MetodoPagoEnum::CuentaDeBanco->value,
    "tipo" => IngresoTipoEnum::Salario->value,
    "fecha_ingreso" => date("Y-m-d H:i:s"),
    "cantidad" => 60000,
    "descripcion" => "Se da de alta un sueldo"
]);

$retiroController = new RetirosController();
$retiroController->store([
    "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
    "tipo" => RetiroTipoEnum::Compra->value,
    "fecha_retiro" => date("Y-m-d H:i:s"),
    "cantidad" => 400,
    "descripcion" => "compre unos sandwich de pasta de queso"
]);

echo "ACA COMIENZA EL RETIRO <br>";
$retiroController->index();
echo "******************************************************************<br>";
echo "ACA COMIENZA EL INGRESO <br>";
$ingresoController->index();
echo "******************************************************************<br>";
$ingresoController->show("5");
echo "******************************************************************<br>";
$ingresoController->destroy(9);

?>