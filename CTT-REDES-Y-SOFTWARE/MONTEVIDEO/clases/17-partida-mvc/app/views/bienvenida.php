<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['IDUsuario'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Enlace de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">MiJuego</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cerrarSesion.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center text-center">
        <div class="mb-4">
            <?php
            // Mensaje de bienvenida
            echo "<h3 class='text-primary'>Bienvenido, usuario con ID: " . $_SESSION['IDUsuario'] . "</h3>";
            ?>
        </div>
        <div class="d-flex gap-3">
            <a href="comenzarPartida.php" class="btn btn-success btn-lg">Comenzar Partida</a>
            <a href="verEstadisticas.php" class="btn btn-info btn-lg">Ver Estadísticas</a>
        </div>
    </div>

    <!-- Enlace de Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
