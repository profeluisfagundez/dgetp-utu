<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='utf-8'>
        <title>Listado de personal</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>    
        <link rel='stylesheet' href='css/style.css' media='all' />
    </head>
    <body>
        <header> 
            <h1>S.G.T - Sistema de Gestión Trabajadores</h1>
            <nav>
                <ul>
                    <li><a title='Volver al principio' href='index.html'>Inicio</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <table class='tablaprincipal'>
                <h2>Trabajadores activos en la empresa</h2>
                <tr>
                    <td class='tablaSolida'>Cédula </td>
                    <td class="tablaSolida">Nombre </td>
                    <td class="tablaSolida">Apellido </td>
                    <td class="tablaSolida">Dirección </td>
                    <td class="tablaSolida">E-mail </td>
                    <td class="tablaSolida">Teléfono </td>
                </tr>
                <?php
                    require("Persistencia.php");
                    $pdo = new Persistencia();
                    $registros=$pdo->retornarRegistros();
                    foreach($registros as $reg){
                        echo "<tr>";
                        echo "<td class='tablaSolida'>{$reg['ci']}</td>";
                        echo "<td class='tablaSolida'>{$reg['nombre']}</td>";
                        echo "<td class='tablaSolida'>{$reg['apellido']}</td>";
                        echo "<td class='tablaSolida'>{$reg['direccion']}</td>";
                        echo "<td class='tablaSolida'>{$reg['email']}</td>";
                        echo "<td class='tablaSolida'>{$reg['celular']}</td>";
                        echo "</tr>";            
                    }
                ?>
            </table>
        </section>
    </body>
</html>

