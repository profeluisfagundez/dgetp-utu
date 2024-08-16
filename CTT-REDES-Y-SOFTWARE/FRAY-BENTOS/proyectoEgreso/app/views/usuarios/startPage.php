<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de administración de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bienvenido <?php echo $_SESSION['usuario']['username'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Realizar consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                    <li>Ver consultas realizadas</li></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                    <li>Cerrar sesión</li></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="https://t3.ftcdn.net/jpg/00/92/53/56/360_F_92535664_IvFsQeHjBzfE6sD4VHdO8u5OHUSc6yHF.jpg" class="d-block mx-auto" alt="Imagen de ejemplo">

    <div class="container">
        <div class="row row-cols-2">
            <div class="col-3">
                <article>
                    <p>Primer articulo</p>
                </article>
            </div>
            <div class="col-3">
                <article>
                    <p>Segundo articulo</p>
                </article>
            </div>
            <div class="col-3">
                <article>
                    <p>Tercer articulo</p>
                </article>
            </div>
            <div class="col-3">
                <article>
                    <p>Cuarto articulo</p>
                </article>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>