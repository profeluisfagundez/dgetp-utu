<?php

include("../app/config.php");
include("../app/funciones.php");

if (!isset($_SESSION["usuarioLogueado"])) {
    header("Location: ../index.php");
    exit();
}

if ($_SESSION["usuarioLogueado"]["tipo"] != "administrador") {
    header("Location: ../index.php");
    exit();
}

$mensaje = "";

if (isset($_POST["guardar"])) {
    agregarAuto(
        $_POST["marca"],
        $_POST["modelo"],
        $_POST["anio"],
        $_POST["color"],
        $_POST["kilometros"],
        $_POST["precio"]
    );

    $mensaje = "Automóvil registrado correctamente.";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Cargar Automóvil</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="contenedor-login">

        <div class="card">

            <h1>Cargar Automóvil</h1>

            <?php

            if ($mensaje != "") {
                echo "<div class='exito'>$mensaje</div>";
            }

            ?>

            <form method="POST">

                <label>Marca</label>

                <input
                    type="text"
                    name="marca"
                    required>

                <label>Modelo</label>

                <input
                    type="text"
                    name="modelo"
                    required>

                <label>Año</label>

                <input
                    type="number"
                    name="anio"
                    required>

                <label>Color</label>

                <input
                    type="text"
                    name="color"
                    required>

                <label>Kilómetros</label>

                <input
                    type="number"
                    name="kilometros"
                    required>

                <label>Precio</label>

                <input
                    type="number"
                    name="precio"
                    required>

                <button
                    type="submit"
                    name="guardar">
                    Guardar Automóvil
                </button>

            </form>

            <br>

            <a
                class="boton boton-volver"
                href="principalAdministrador.php">
                Volver al Panel
            </a>

        </div>

    </div>

</body>

</html>