<?php
// Incluir las clases Mazo y Carta
require_once('Mazo.php');

session_start();  // Iniciar sesión

// Inicializamos el mazo solo si no está ya en sesión
if (!isset($_SESSION['mazo'])) {
    $_SESSION['mazo'] = new Mazo();
}

$carta1 = null;
$carta2 = null;
$resultado = null;
$contador = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Barajar el mazo antes de sacar cartas solo si quedan cartas en el mazo
    if ($_SESSION['mazo']->contarCartasMazo() >= 2) {
        $_SESSION['mazo']->barajarMazo(); // Barajamos el mazo
        $carta1 = $_SESSION['mazo']->getCartaAleatoria();
        $carta2 = $_SESSION['mazo']->getCartaAleatoria();
        // Comparar las cartas
        if ($carta1->getNumero() > $carta2->getNumero()) {
            $resultado = "¡La carta 1 gana!";
        } elseif ($carta1->getNumero() < $carta2->getNumero()) {
            $resultado = "¡La carta 2 gana!";
        } else {
            $resultado = "Es un empate";
        }
    } else {
        $resultado = "No quedan suficientes cartas en el mazo.";
    }

    $contador = $_SESSION['mazo']->contarCartasMazo();
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
                <p>Carta 1</p>
            <?php endif; ?>
        </div>

        <div class="card">
            <?php if ($carta2): ?>
                <?php echo $carta2->__toString(); ?>
            <?php else: ?>
                <p>Carta 2</p>
            <?php endif; ?>
        </div>
    </div>

    <form method="post">
        <button type="submit" name="batallar">Batallar</button>
    </form>

    <div id="resultado">
        <?php if ($resultado): ?>
            <p><?php echo $resultado; ?></p>
            <p>Quedan: <?php echo $contador; ?> cartas</p>
        <?php endif; ?>
    </div>

</body>

</html>