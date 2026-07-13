<?php

include("config.php");
include("funciones.php");

$usuario = $_POST["user"];
$password = $_POST["password"];

$usuarioEncontrado = buscarUsuario($usuario,$password);

if($usuarioEncontrado != null)
{
    $_SESSION["usuarioLogueado"] = $usuarioEncontrado;

    if($usuarioEncontrado["tipo"] == "administrador")
    {
        header("Location: ../views/principalAdministrador.php");
    }
    else
    {
        header("Location: ../views/principalComprador.php");
    }
}
else
{
    header("Location: ../index.php?error=1");
}

?>