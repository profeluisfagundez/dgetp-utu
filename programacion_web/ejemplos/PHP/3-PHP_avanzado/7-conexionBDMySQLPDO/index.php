<?php

require_once("app/controllers/IngresosController.php");
require_once("app/controllers/RetirosController.php");
require_once("app/enums/MetodoPagoEnum.php");
require_once("app/enums/IngresoTipoEnum.php");
require_once("app/enums/RetiroTipoEnum.php");

$ingresoController = new IngresosController();
$ingresoController->store([
    "metodo_pago" => MetodoPagoEnum::CuentaDeBanco->value,
    "tipo" => IngresoTipoEnum::Salario->value,
    "fecha_retiro" => date("Y-m-d H:i:s"),
    "cantidad" => 65000,
    "descripcion" => "ingreso un segundo sueldo jaja"
]);

$retiroController = new RetirosController();
$retiroController->store([
    "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
    "tipo" => RetiroTipoEnum::Compra->value,
    "fecha_retiro" => date("Y-m-d H:i:s"),
    "cantidad" => 650,
    "descripcion" => "compre mucha comida"
]);

$retiroController->index();

?>