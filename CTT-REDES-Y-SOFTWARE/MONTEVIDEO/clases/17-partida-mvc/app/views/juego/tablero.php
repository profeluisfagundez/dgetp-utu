<?php
require_once('PartidaController.php');

session_start();

// Iniciar o recuperar la partida
$partida = new PartidaController();

$resultado = null;
$contadorHumano = null;
$contadorPC = null;
$ganador = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar el estado del juego
    $ganador = $partida->verificarEstadoJuego();

    if ($ganador) {
        session_destroy(); // Reiniciar la partida destruyendo la sesión
    } else {
        // Obtener el resultado de la batalla
        $resultado = $partida->batallar();

        // Contar las cartas restantes de cada jugador
        $contadores = $partida->contarCartasRestantes();
        $contadorHumano = $contadores['contadorHumano'];
        $contadorPC = $contadores['contadorPC'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla de Cartas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Batalla de Cartas</h1>

    <div class="jugadores">
        <div class="jugador jugador1">
            <h2><?php echo $partida->getJugadores()[0]->getNombre(); ?></h2>
            <p>Vidas: <?php echo $partida->getJugadores()[0]->getVidas(); ?></p>
            <p>Cartas restantes: <?php echo $contadorHumano; ?></p>
        </div>

        <div class="jugador jugador2">
            <h2><?php echo $partida->getJugadores()[1]->getNombre(); ?></h2>
            <p>Vidas: <?php echo $partida->getJugadores()[1]->getVidas(); ?></p>
            <p>Cartas restantes: <?php echo $contadorPC; ?></p>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <?php if ($partida->getCartaHumanoActual()): ?>
                <?php echo $partida->getCartaHumanoActual()->__toString(); ?>
            <?php else: ?>
                <p>Carta de <?php echo $partida->getJugadores()[0]->getNombre(); ?></p>
            <?php endif; ?>
        </div>

        <div class="card">
            <?php if ($partida->getCartaPCActual()): ?>
                <?php echo $partida->getCartaPCActual()->__toString(); ?>
            <?php else: ?>
                <p>Carta de <?php echo $partida->getJugadores()[1]->getNombre(); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <form method="post" action="index.php">
        <button type="submit">Batallar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <?php if ($ganador): ?>
        <div class="ganador">
            <h2>¡<?php echo $ganador; ?> gana el juego!</h2>
        </div>
        <form method="post" action="index.php">
            <button type="submit">Reiniciar juego</button>
        </form>
    <?php endif; ?>
</body>

</html>
