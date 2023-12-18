<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/inicioStyle.css">
</head>

<body>
    <header>
        <h1>Sistema Financiero</h1>
    </header>

    <nav>
        <ul>
            <li><a href="<?php echo 'ingresos' ?>">Listar ingresos</a></li>
            <li><a href="<?php echo 'ingresos/create' ?>">Crear un ingreso</a></li>
            <!--<li><a href="#">Buscar un ingreso</a></li>-->
            <li>
                <form id="buscarForm">
                    <label for="buscarID">Buscar un ingreso por ID:</label>
                    <input type="number" name="id" id="buscarID" required>
                    <input type="button" value="Buscar" onclick="buscarIngreso()">
                </form>
            </li>
            <li><a href="#">Editar un ingreso</a></li>
            <li><a href="#">Eliminar un ingreso</a></li>
            <li><a href="#">Listar retiros</a></li>
            <li><a href="#">Crear un retiro</a></li>
            <li><a href="#">Buscar un retiro</a></li>
            <li><a href="#">Editar un retiro</a></li>
            <li><a href="#">Eliminar un retiro</a></li>
        </ul>
    </nav>

    <script>
        function buscarIngreso() {
            var idBuscado = document.getElementById("buscarID").value;
            window.location.href = "ingresos/" + idBuscado;
        }
    </script>

</body>

</html>