<?php

function buscarUsuario(string $user,string $password): ?array
{
    $usuarioEncontrado = null;

    foreach($_SESSION["usuarios"] as $usuarioSistema)
    {
        if($usuarioSistema["user"] == $user && $usuarioSistema["password"] == $password){
            $usuarioEncontrado = $usuarioSistema;
        }
    }
    return $usuarioEncontrado;
}

function obtenerAutos(): array
{
    return $_SESSION["autos"];
}

function agregarAuto(string $marca,string $modelo,string $anio,string $color,string $kilometros,string $precio): void
{
    $nuevoAuto = [
        "id" => count($_SESSION["autos"]) + 1,
        "marca" => $marca,
        "modelo" => $modelo,
        "anio" => $anio,
        "color" => $color,
        "kilometros" => $kilometros,
        "precio" => $precio
    ];
    $_SESSION["autos"][] = $nuevoAuto;
}
