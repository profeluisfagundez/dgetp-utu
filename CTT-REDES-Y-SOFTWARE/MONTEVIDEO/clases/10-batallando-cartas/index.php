<?php
// Incluir las clases Mazo y Carta
require_once('Mazo.php');

// Inicializamos el mazo y obtenemos dos cartas aleatorias 
// solo si se presiona el botón "Batallar"
if (!isset($_SESSION['mazo'])) {
    $_SESSION['mazo'] = new Mazo();
}

$_SESSION['mazo']->barajarMazo(); // Barajamos el mazo para obtener cartas aleatorias
$carta1 = null;
$carta2 = null;
$resultado = null;
$cantidadCartas = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener dos cartas aleatorias
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
    $cantidadCartas = $_SESSION['mazo']->contarCartasMazo();
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
        <?php endif; ?>
    </div>
    <p>Quedan la siguiente cantidad de cartas: </p><?php echo $cantidadCartas; ?>
</body>
</html>
