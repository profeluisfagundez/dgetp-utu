<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Buzón Ciudadano de Fray Bentos</title>
    <link rel="stylesheet" href="./css/loginstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Buzón Ciudadano de Fray Bentos</h2>
        <form action="../app/controllers/procesarLogin.php" method="post">
            <label for="username">Nombre de Usuario</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <label for="role">Rol</label>
            <select id="role" name="role" required>
                <option value="usuario">Usuario</option>
                <option value="administrador">Administrador</option>
            </select>
            
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

