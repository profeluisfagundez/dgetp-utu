<?php

include("../app/config.php");
include("../app/funciones.php");

if (!isset($_SESSION["usuarioLogueado"])) {
    header("Location: ../index.php");
    exit();
}

$autos = obtenerAutos();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de Automóviles</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <div class="contenedor">
        <h1>Listado de Automóviles</h1>
        <table>
            <tr>

                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Km</th>
                <th>Precio</th>
                <?php
                if ($_SESSION["usuarioLogueado"]["tipo"] == "administrador") {
                ?>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                <?php
                }
                ?>

            </tr>

            <?php
            foreach ($autos as $auto) {
            ?>
                <tr>
                    <td><?php echo $auto["id"]; ?></td>
                    <td><?php echo $auto["marca"]; ?></td>
                    <td><?php echo $auto["modelo"]; ?></td>
                    <td><?php echo $auto["anio"]; ?></td>
                    <td><?php echo $auto["color"]; ?></td>
                    <td><?php echo $auto["kilometros"]; ?></td>
                    <td>$ <?php echo $auto["precio"]; ?></td>
                    <?php

                    if ($_SESSION["usuarioLogueado"]["tipo"] == "administrador") {
                    ?>

                        <td>

                            <a
                                class="boton boton-editar"
                                href="modificarAuto.php?id=<?php echo $auto["id"]; ?>">
                                Modificar
                            </a>

                        </td>

                        <td>

                            <a
                                class="boton boton-eliminar"
                                href="eliminarAuto.php?id=<?php echo $auto["id"]; ?>">
                                Eliminar
                            </a>

                        </td>

                    <?php
                    }

                    ?>

                </tr>

            <?php
            }

            ?>

        </table>

        <br>

        <?php

        if ($_SESSION["usuarioLogueado"]["tipo"] == "administrador") {
        ?>

            <a
                class="boton boton-volver"
                href="principalAdministrador.php">
                Volver al Panel
            </a>

        <?php
        } else {
        ?>

            <a
                class="boton boton-volver"
                href="principalComprador.php">
                Volver al Panel
            </a>

        <?php
        }

        ?>

    </div>

</body>

</html>