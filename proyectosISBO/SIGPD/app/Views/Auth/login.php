<?php
// Redirigir si ya está logueado
if (isset($_SESSION['user'])) {
  header('Location: index.php?page=dashboard');
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - SIGPD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4 shadow rounded-4" style="max-width: 400px; width: 100%;">
      <h2 class="text-center text-success mb-3">Bienvenido a SIGPD 🦖</h2>
      <form method="POST" action="index.php?page=login">
        <div class="mb-3">
          <label for="email" class="form-label">Usuario</label>
          <input type="text" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Ingresar</button>
        </div>
      </form>

      <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user = htmlspecialchars($_POST['email'] ?? '');
          $pass = htmlspecialchars($_POST['password'] ?? '');

          // Login simulado
          if ($user === 'admin' && $pass === '1234') {
            $_SESSION['user'] = $user;
            header('Location: index.php?page=dashboard');
            exit;
          } else {
            echo '<div class="alert alert-danger mt-3">Credenciales incorrectas</div>';
          }
        }
      ?>
    </div>
  </div>

</body>
</html>

