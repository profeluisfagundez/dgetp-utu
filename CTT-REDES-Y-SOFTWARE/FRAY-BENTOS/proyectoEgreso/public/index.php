<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Buzón Ciudadano de Fray Bentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm p-4" style="width: 300px;">
        <h2 class="text-center text-primary mb-4">Buzón Ciudadano de Fray Bentos</h2>
        <form action="../app/controllers/routerHandlers.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="role" class="form-label">Rol</label>
                <select id="role" name="role" class="form-select" required>
                    <option value="usuario">Usuario</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            <input type="hidden" name="type" value="login">
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            <div id="error-message" class="text-center" style="color:red;"></div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>