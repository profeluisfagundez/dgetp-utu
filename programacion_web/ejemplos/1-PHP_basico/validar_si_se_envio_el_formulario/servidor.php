<?php
    echo "<pre>";
    //el método "isset" comprueba si se ha seteado un dato o valor, peor no valida si esta vacío o no.
    var_dump(isset($_POST["name"]));
    //valida si un valor esta vacío o no
    var_dump(empty($_POST["name"]));
    echo "</pre>";
    if (isset($_POST["name"]) && !empty($_POST["name"])){
        echo "bienvenido ".$_POST["name"];
    } else {
        echo "Se envio el formulario vacio";
    }
?>