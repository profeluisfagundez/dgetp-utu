<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/inicioStyle.css">
</head>

<body>
    <main>
        <header>
            <h1>Sistema Financiero</h1>
        </header>

        <nav>
            <div>
                <h3>Sección de Ingresos</h3>
                <ul>
                    <li><a href="<?php echo 'ingresos' ?>">Listar ingresos</a></li>
                    <li><a href="<?php echo 'ingresos/create' ?>">Crear un ingreso</a></li>
                    <li>
                        <form id="buscarFormIngreso">
                            <label for="buscarIDIngreso">Buscar un ingreso por ID:</label>
                            <input type="number" name="id" id="buscarIDIngreso" required>
                            <input type="button" value="Buscar" onclick="buscarIngreso()">
                        </form>
                    </li>
                    <li><a href="#">Editar un ingreso</a></li>
                    <li><a href="<?php echo 'ingresos/delete' ?>">Eliminar un ingreso</a></li>
                </ul>
            </div>

            <div>
                <h3>Sección de Retiros</h3>
                <ul>
                    <li><a href="<?php echo 'retiros' ?>">Listar retiros</a></li>
                    <li><a href="<?php echo 'retiros/create' ?>">Crear un retiro</a></li>
                    <li>
                        <form id="buscarFormRetiro">
                            <label for="buscarIDRetiro">Buscar un retiro por ID:</label>
                            <input type="number" name="id" id="buscarIDRetiro" required>
                            <input type="button" value="Buscar" onclick="buscarRetiro()">
                        </form>
                    </li>
                    <li><a href="#">Editar un retiro</a></li>
                    <li><a href="<?php echo 'retiros/delete' ?>">Eliminar un retiro</a></li>
                </ul>
            </div>
        </nav>
    </main>

    <script>
        function buscarIngreso() {
            var idBuscado = document.getElementById("buscarIDIngreso").value;
            if (idBuscado) {
                window.location.href = "ingresos/" + idBuscado;
            } else {
                alert("Por favor, introduce un ID.");
            }
        }

        function buscarRetiro() {
            var idBuscado = document.getElementById("buscarIDRetiro").value;
            if (idBuscado) {
                window.location.href = "retiros/" + idBuscado;
            } else {
                alert("Por favor, introduce un ID.");
            }
        }
    </script>

</body>

</html>
