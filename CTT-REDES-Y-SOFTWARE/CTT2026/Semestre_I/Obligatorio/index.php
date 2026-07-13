<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Automotora</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contenedor-login">
        <div class="card">
            <h1>Automotora Online</h1>
            <h2>Iniciar Sesión</h2>
            <form action="app/login.php" method="POST">
                <label>Usuario</label>
                <input type="text" name="user" required>
                <label>Contraseña</label>
                <input type="password" name="password" required>
                <button type="submit"> Ingresar </button>
            </form>
        </div>
    </div>
</body>
</html>