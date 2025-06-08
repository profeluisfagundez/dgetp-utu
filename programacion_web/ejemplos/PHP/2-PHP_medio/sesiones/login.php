<?php

session_start();

$users = [

    //Simulamos una base de datos para probar las sesiones
    array(
        "username" => "luis",
        "email" => "profeluisfagundez@gmail.com"
    ),

    array(
        "username" => "eduardo",
        "email" => "profeeduardofagundez@noexisteelemail.com"
    ),

];
//Recibimos mediante una URL la variable $user con un valor 0 o 1 del arreglo de arriba
$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];