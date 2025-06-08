<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("../../controllers/LoginController.php");
LoginController::getInstance()->checkUserLoggedIn();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de administración de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi perfil (<?php echo htmlspecialchars($_SESSION['usuario']['username']); ?>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Realizar consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ver consultas realizadas</a>
                    </li>
                    <li class="nav-item">
                        <form action="../../controllers/routerHandlers.php" method="post">
                            <input type="hidden" name="type" value="logout">
                            <button type="submit">Cerrar Sesión</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="https://t3.ftcdn.net/jpg/00/92/53/56/360_F_92535664_IvFsQeHjBzfE6sD4VHdO8u5OHUSc6yHF.jpg" class="d-block mx-auto" alt="Descripción de la imagen">

    <div class="container">
        <div class="row">
            <div class="col">
                <article>
                    <p>Primer artículo</p>
                </article>
            </div>
            <div class="col">
                <article>
                    <p>Segundo artículo</p>
                </article>
            </div>
            <div class="col">
                <article>
                    <p>Tercer artículo</p>
                </article>
            </div>
            <div class="col">
                <article>
                    <p>Cuarto artículo</p>
                </article>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>