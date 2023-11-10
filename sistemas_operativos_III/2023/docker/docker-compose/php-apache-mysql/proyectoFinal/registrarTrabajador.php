<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='utf-8'>
        <title>Listado de trabajadores</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>    
        <link rel='stylesheet' href='css/style.css' media='all' />
    </head>
    <body>
        <header> 
            <h1>S.G.P - Sistema de Gestión de Personal</h1>
            <nav>
                <ul>
                    <li><a title='Volver al principio' href='index.html'>Inicio</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <article>
            <?php
                if ($_POST) {
                    require("Persistencia.php");
                    require("Trabajador.php");
                    $exito = false;
                    $pdo = new Persistencia();
                    $ci = $_POST['ci'];
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $direccion = $_POST['direccion'];
                    $email = $_POST['u_email'];
                    $celular = $_POST['celular'];
                    $trabajador = new Trabajador($ci, $nombre, $apellido, $direccion, $email, $celular);
                    $exito = $pdo->altaUsuario($trabajador);
                    if($exito){
                        echo "<h3>El trabajador fue dado de alta en el Sistema.</h3>"; 
                        echo "<p>Se ingresaron los siguientes datos en la Base de datos:</p>";
                        $val = $trabajador->toString();
                        echo "<hp>$val</hp>";
                    }
                    else {
                        echo "<h3>El trabajador no fue dado de alta en el Sistema.</h3>"; 
                    }  
                }
                else {
                    echo "<h3>No se enviaron los datos por el método POST.</h3>";
                }
            ?>
            </article>
        </section>
    </body>
</html>