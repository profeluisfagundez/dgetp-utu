<?php
// Incluir las clases Jugador
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
    // Verificar si quedan suficientes cartas en ambos mazos
    if (!$_SESSION['jugadores'][0]->quedanCartas() || !$_SESSION['jugadores'][1]->quedanCartas()) {
        // Determinar el ganador final
        if ($_SESSION['jugadores'][0]->getRondasGanadas() > $_SESSION['jugadores'][1]->getRondasGanadas()) {
            $ganador = $_SESSION['jugadores'][0]->getNombre() . " es el ganador final!";
        } elseif ($_SESSION['jugadores'][0]->getRondasGanadas() < $_SESSION['jugadores'][1]->getRondasGanadas()) {
            $ganador = $_SESSION['jugadores'][1]->getNombre() . " es el ganador final!";
        } else {
            $ganador = "El juego termina en empate!";
        }

        // Reiniciamos los jugadores
        $resultado = "No quedan cartas. " . $ganador;
        $_SESSION['jugadores'] = [
            new Jugador('Jugador 1', 3),
            new Jugador('Jugador 2', 3)
        ];

        // Barajamos los mazos de cada jugador nuevamente
        foreach ($_SESSION['jugadores'] as $jugador) {
            $jugador->getMazo()->barajarMazo();
        }
    } else {
        // Obtener cartas aleatorias de cada jugador
        $carta1 = $_SESSION['jugadores'][0]->getCartaMazoAleatoria();
        $carta2 = $_SESSION['jugadores'][1]->getCartaMazoAleatoria();

        // Comparar las cartas
        if ($carta1->getNumero() > $carta2->getNumero()) {
            $resultado = $_SESSION['jugadores'][0]->getNombre() . " gana la ronda!";
            $_SESSION['jugadores'][0]->ganarRonda(); // Incrementar rondas ganadas
        } elseif ($carta1->getNumero() < $carta2->getNumero()) {
            $resultado = $_SESSION['jugadores'][1]->getNombre() . " gana la ronda!";
            $_SESSION['jugadores'][1]->ganarRonda(); // Incrementar rondas ganadas
        } else {
            $resultado = "Es un empate";
        }
    }

    // Contar las cartas restantes de cada jugador
    $contador1 = $_SESSION['jugadores'][0]->getMazo()->contarCartasMazo();
    $contador2 = $_SESSION['jugadores'][1]->getMazo()->contarCartasMazo();
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
            <p><?php echo $_SESSION['jugadores'][0]->getNombre(); ?> tiene: <?php echo $contador1; ?> cartas restantes</p>
            <p><?php echo $_SESSION['jugadores'][1]->getNombre(); ?> tiene: <?php echo $contador2; ?> cartas restantes</p>
        <?php endif; ?>

        <?php if ($ganador): ?>
            <h2><?php echo $ganador; ?></h2>
        <?php endif; ?>
    </div>

</body>

</html>
