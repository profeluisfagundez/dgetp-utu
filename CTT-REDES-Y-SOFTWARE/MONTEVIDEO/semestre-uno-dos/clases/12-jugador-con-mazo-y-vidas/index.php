<?php
// Incluir la clases Jugador, recuerden qu eesta clase contiene a Mazo
require_once('Jugador.php');

session_start();  // Iniciar sesión

// Inicializamos los jugadores solo si no están ya en sesión
if (!isset($_SESSION['jugadores'])) {
    $_SESSION['jugadores'] = [
        new Jugador('Jugador 1', 3), 
        new Jugador('Jugador 2', 3)
    ];
    // Barajamos los mazos de cada jugador
    foreach ($_SESSION['jugadores'] as $jugador) {
        $jugador->getMazo()->barajarMazo();
    }
}

$carta1 = null;
$carta2 = null;
$resultado = null;
$contador1 = null;
$contador2 = null;
$ganador = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si un jugador ya ha perdido (se quedó sin vidas)
    if ($_SESSION['jugadores'][0]->getVidas() <= 0) {
        $ganador = $_SESSION['jugadores'][1]->getNombre() . " ha ganado la partida, " . $_SESSION['jugadores'][0]->getNombre() . " se quedó sin vidas.";
        session_destroy(); // Reiniciar la partida destruyendo la sesión
    } elseif ($_SESSION['jugadores'][1]->getVidas() <= 0) {
        $ganador = $_SESSION['jugadores'][0]->getNombre() . " ha ganado la partida, " . $_SESSION['jugadores'][1]->getNombre() . " se quedó sin vidas.";
        session_destroy(); // Reiniciar la partida destruyendo la sesión
    } else {
        // Verificar si quedan menos de 45 cartas en alguno de los mazos
        if ($_SESSION['jugadores'][0]->cartasEnMazo() < 45 || $_SESSION['jugadores'][1]->cartasEnMazo() < 45) {
            // Determinar el ganador de la ronda
            if ($_SESSION['jugadores'][0]->getRondasGanadas() > $_SESSION['jugadores'][1]->getRondasGanadas()) {
                $resultado = $_SESSION['jugadores'][0]->getNombre() . " gana esta ronda!";
                $_SESSION['jugadores'][1]->reducirVidas();
            } elseif ($_SESSION['jugadores'][0]->getRondasGanadas() < $_SESSION['jugadores'][1]->getRondasGanadas()) {
                $resultado = $_SESSION['jugadores'][1]->getNombre() . " gana esta ronda!";
                $_SESSION['jugadores'][0]->reducirVidas();
            } else {
                $resultado = "La ronda termina en empate!";
            }

            // Barajar los mazos nuevamente
            foreach ($_SESSION['jugadores'] as $jugador) {
                $jugador->getMazo()->reiniciarMazo();
                $jugador->getMazo()->barajarMazo();
            }
        } else {
            // Obtener cartas aleatorias de cada jugador
            $carta1 = $_SESSION['jugadores'][0]->getCartaMazoAleatoria();
            $carta2 = $_SESSION['jugadores'][1]->getCartaMazoAleatoria();

            // Comparar las cartas
            if ($carta1->getNumero() > $carta2->getNumero()) {
                $resultado = $_SESSION['jugadores'][0]->getNombre() . " gana la mano!";
                $_SESSION['jugadores'][0]->ganarRonda(); // Incrementar rondas ganadas
            } elseif ($carta1->getNumero() < $carta2->getNumero()) {
                $resultado = $_SESSION['jugadores'][1]->getNombre() . " gana la mano!";
                $_SESSION['jugadores'][1]->ganarRonda(); // Incrementar rondas ganadas
            } else {
                $resultado = "Es un empate, las manos son iguales";
            }
        }

        // Contar las cartas restantes de cada jugador
        $contador1 = $_SESSION['jugadores'][0]->getMazo()->contarCartasMazo();
        $contador2 = $_SESSION['jugadores'][1]->getMazo()->contarCartasMazo();
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
    <h1>Batalla de Cartas "AVANZADA"</h1>

    <!-- Div contenedor para los jugadores -->
    <div class="jugadores">
        <!-- Información del Jugador 1 (Aún sin nombre) -->
        <div class="jugador jugador1">
            <h2><?php echo $_SESSION['jugadores'][0]->getNombre(); ?></h2>
            <p>Vidas: <?php echo $_SESSION['jugadores'][0]->getVidas(); ?></p>
            <p>Cartas restantes: <?php echo $contador1; ?></p>
        </div>

        <!-- Información del Jugador 2 (Aún sin nombre)  -->
        <div class="jugador jugador2">
            <h2><?php echo $_SESSION['jugadores'][1]->getNombre(); ?></h2>
            <p>Vidas: <?php echo $_SESSION['jugadores'][1]->getVidas(); ?></p>
            <p>Cartas restantes: <?php echo $contador2; ?></p>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <?php if ($carta1): ?>
                <?php echo $carta1->__toString(); ?>
            <?php else: ?>
                <p>Carta de <?php echo $_SESSION['jugadores'][0]->getNombre(); ?></p>
            <?php endif; ?>
        </div>

        <div class="card">
            <?php if ($carta2): ?>
                <?php echo $carta2->__toString(); ?>
            <?php else: ?>
                <p>Carta de <?php echo $_SESSION['jugadores'][1]->getNombre(); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <form method="post">
        <button type="submit" name="batallar">Batallar</button>
    </form>

    <div id="resultado">
        <?php if ($resultado): ?>
            <p><?php echo $resultado; ?></p>
        <?php endif; ?>

        <?php if ($ganador): ?>
            <h2><?php echo $ganador; ?></h2>
        <?php endif; ?>
    </div>

</body>

</html>