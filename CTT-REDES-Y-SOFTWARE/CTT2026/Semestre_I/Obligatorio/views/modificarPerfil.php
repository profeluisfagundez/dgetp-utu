<?php

include("../app/config.php");

if (!isset($_SESSION["usuarioLogueado"])) {
    header("Location: ../index.php");
    exit();
}

$mensaje = "";

if (isset($_POST["guardar"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $password = $_POST["password"];

    foreach ($_SESSION["usuarios"] as $indice => $usuario) {
        if (
            $usuario["id"] ==
            $_SESSION["usuarioLogueado"]["id"]
        ) {
            $_SESSION["usuarios"][$indice]["nombre"] = $nombre;
            $_SESSION["usuarios"][$indice]["apellido"] = $apellido;
            $_SESSION["usuarios"][$indice]["password"] = $password;

            $_SESSION["usuarioLogueado"] =
                $_SESSION["usuarios"][$indice];

            $mensaje = "Perfil actualizado correctamente.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Modificar Perfil</title>

    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="contenedor-login">

        <div class="card">

            <h1>Modificar Perfil</h1>

            <?php

            if ($mensaje != "") {
                echo "<div class='exito'>$mensaje</div>";
            }

            ?>

            <form method="POST">

                <label>Nombre</label>

                <input
                    type="text"
                    name="nombre"
                    value="<?php echo $_SESSION["usuarioLogueado"]["nombre"]; ?>"
                    required>

                <label>Apellido</label>

                <input
                    type="text"
                    name="apellido"
                    value="<?php echo $_SESSION["usuarioLogueado"]["apellido"]; ?>"
                    required>

                <label>Contraseña</label>

                <input
                    type="password"
                    name="password"
                    value="<?php echo $_SESSION["usuarioLogueado"]["password"]; ?>"
                    required>

                <button type="submit" name="guardar">
                    Guardar Cambios
                </button>

            </form>

            <br>

            <?php

            if (
                $_SESSION["usuarioLogueado"]["tipo"]
                ==
                "administrador"
            ) {
            ?>

                <a
                    class="boton boton-volver"
                    href="principalAdministrador.php">
                    Volver
                </a>

            <?php
            } else {
            ?>

                <a
                    class="boton boton-volver"
                    href="principalComprador.php">
                    Volver
                </a>

            <?php
            }

            ?>

        </div>

    </div>

</body>

</html>