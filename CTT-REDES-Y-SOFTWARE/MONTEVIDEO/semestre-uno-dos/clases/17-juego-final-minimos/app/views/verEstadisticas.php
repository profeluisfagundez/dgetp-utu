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
    <title>Página en Construcción</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

    <div class="text-center p-5 border rounded shadow-lg bg-white">
        <h1 class="display-4 text-warning">Página en Construcción</h1>
        <p class="lead">Estamos trabajando para brindarte una mejor experiencia. ¡Vuelve pronto!</p>
        <button onclick="history.back()" class="btn btn-primary mt-3">Volver Atrás</button>
    </div>

    <!-- Bootstrap JS (Opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>