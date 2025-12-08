<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S.G.T - Sistema de Gestión de Trabajadores</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
    <header>
        <h1>S.G.T - Sistema de Gestión de Trabajadores</h1>
        <nav>
            <ul>
                <li><a title="Volver al principio" href="index.html">Inicio</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Modificar trabajador de la empresa</h2>
            <?php
            require("Persistencia.php");
            $pdo = new Persistencia();
            $registros=$pdo->retornarRegistro($_POST['ci']);
            $existe=$pdo->existeTrabajador($_POST['ci']);
            if($existe) {        
            ?>
                <form class="formularioRegistro" action="modificarTrabajador.php" method="post">
                    <table>
                        <tr>
                            <td><label for="ci">Cédula: </label></td>
                            <td><label>No se puede modificar</label></td>
                            <td> <input type="hidden" id="ci" name="viejo_ci" placeholder="56748764" minlength="8" maxlength="8" pattern="[0-9]+" required value ="<?php echo $_POST['ci'] ?>"> </td>

                        </tr>
                        <tr>
                            <td><label for="nombre">Nombre: </label></td>
                            <td> <input type="text" id="nombre" name="nombre" placeholder="Juan Pepito" required/></td>
                        </tr>
                        <tr>
                            <td><label for="apellido">Apellido: </label></td>
                            <td><input type="text" id="apellido" name="apellido" placeholder="Martínez Gonzalez" required/></td>
                        </tr>
                        <tr>
                            <td><label for="direccion">Dirección: </label></td>
                            <td><input type="text" id="direccion" name="direccion" placeholder="Magallanes 7853" required/></td>
                            </tr>
                        <tr>
                            <td><label for="u_email">E-Mail: </label></td>
                            <td><input type="email" id="u_email" name="u_email" placeholder="juan_pepito@dominio.com" required/></td>
                        </tr>
                        <tr>
                            <td><label for="celular">Celular: </label></td>
                            <td><input type="text" id="celular" name="celular" placeholder="098234543" minlength="9" maxlength="9" pattern="[0-9]+" required/></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="enviar"></td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            else {
                 echo "<article> <h3> No se encuentra un trabajador con la cédula de identidad ingresada.</h3> </article>"; 
            }
            ?>
    </section>
</body>
</html>