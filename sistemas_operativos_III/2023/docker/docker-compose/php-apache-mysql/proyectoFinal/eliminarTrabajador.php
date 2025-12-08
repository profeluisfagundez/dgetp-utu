<!DOCTYPE html>
    <html lang='es'>
        <head>
            <meta charset='utf-8'>
            <title>S.G.T - Sistema de Gestión de Trabajadores</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link rel='stylesheet' href='css/style.css' media='all' />
        </head>
        <body>
            <header>
                <h1>S.G.T - Sistema de Gestión de Trabajadores</h1>
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
                        $pdo = new Persistencia();
                        $resultado = $pdo->borrarRegistro($_POST['ci']);
                        if($resultado) {
                            echo "<h3>Se borro el trabajador de la empresa.</h3>";
                        } 
                        else {
                            echo "<h3>No se encuentra un trabajador con el cédula de identidad ingresada.</h3>";
                        }
                    }
                    else {
                        echo "<h3>Los datos enviados no fueron por el método POST.</h3>";
                    }
                ?>
                </article>
            </section>
        </body>
    </html>