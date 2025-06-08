<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financiero</title>
    <link rel="stylesheet" href="/css/inicioStyle.css">
</head>

<body>
    <header>
        <h1>Sistema Financiero</h1>
    </header>

    <main>
        <section class="seccion-ingresos">
            <h2>Sección de Ingresos</h2>
            <ul>
                <li><a href="<?php echo 'ingresos' ?>">Listar ingresos</a></li>
                <li><a href="<?php echo 'ingresos/create' ?>">Crear un ingreso</a></li>
                <li>
                    <form id="buscarFormIngreso">
                        <label for="buscarIDIngreso">Buscar un ingreso por ID</label>
                        <input type="number" name="id" id="buscarIDIngreso" required>
                        <input type="button" value="Buscar" onclick="buscarIngreso()">
                    </form>
                </li>
                <li>
                    <form id="editarFormIngreso">
                        <label for="editarIDIngreso">Editar un ingreso por ID</label>
                        <input type="number" name="id" id="editarIDIngreso" required>
                        <input type="button" value="Editar" onclick="editarIngreso()">
                    </form>
                </li>
                <li><a href="<?php echo 'ingresos/delete' ?>">Eliminar un ingreso</a></li>
            </ul>
        </section>

        <section class="seccion-retiros">
            <h2>Sección de Retiros</h2>
            <ul>
                <li><a href="<?php echo 'retiros' ?>">Listar retiros</a></li>
                <li><a href="<?php echo 'retiros/create' ?>">Crear un retiro</a></li>
                <li>
                    <form id="buscarFormRetiro">
                        <label for="buscarIDRetiro">Buscar un retiro por ID</label>
                        <input type="number" name="id" id="buscarIDRetiro" required>
                        <input type="button" value="Buscar" onclick="buscarRetiro()">
                    </form>
                </li>
                <li>
                    <form id="editarFormRetiro">
                        <label for="editarIDRetiro">Editar un Retiro por ID</label>
                        <input type="number" name="id" id="editarIDRetiro" required>
                        <input type="button" value="Editar" onclick="editarRetiro()">
                    </form>
                </li>
                <li><a href="<?php echo 'retiros/delete' ?>">Eliminar un retiro</a></li>
            </ul>
        </section>
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

        function editarIngreso() {
            var idEditar = document.getElementById("editarIDIngreso").value;
            if (idEditar) {
                window.location.href = "ingresos/edit/" + idEditar;
            } else {
                alert("Por favor, introduce un ID.");
            }
        }

        function editarRetiro() {
            var idEditar = document.getElementById("editarIDRetiro").value;
            if (idEditar) {
                window.location.href = "retiros/edit/" + idEditar;
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
