<!-- app/Views/Dashboard/Panel.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - SIGPD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SIGPD 🦖</a>
      <div class="d-flex">
        <span class="navbar-text me-3">Bienvenido, <?= $_SESSION['user'] ?? 'Invitado' ?></span>
        <a href="index.php?page=logout" class="btn btn-outline-light btn-sm">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="mb-4">Panel Principal</h1>
    <div class="row g-4">

      <!-- Perfil del jugador -->
      <div class="col-md-4">
        <div class="card shadow rounded-4 h-100">
          <div class="card-body text-center">
            <h5 class="card-title">👤 Perfil</h5>
            <p class="card-text">Ver y editar tus datos personales.</p>
            <a href="index.php?page=perfil" class="btn btn-outline-success">Ir al perfil</a>
          </div>
        </div>
      </div>

      <!-- Configurar Partida, aún en fase beta jaj -->
      <div class="col-md-4">
        <div class="card shadow rounded-4 h-100">
          <div class="card-body text-center">
            <h5 class="card-title">🛠️ Configurar partida</h5>
            <p class="card-text">Elegí jugadores y parámetros de la partida.</p>
            <a href="index.php?page=configurar" class="btn btn-outline-success">Configurar</a>
          </div>
        </div>
      </div>

      <!-- Iniciar Seguimiento de la partida -->
      <div class="col-md-4">
        <div class="card shadow rounded-4 h-100">
          <div class="card-body text-center">
            <h5 class="card-title">▶️ Iniciar seguimiento</h5>
            <p class="card-text">Seguimiento visual y reglas en vivo.</p>
            <a href="index.php?page=seguimiento" class="btn btn-outline-success">Iniciar</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
