<?php
// Incluir las clases Mazo y Carta
require_once('Mazo.php');

// Inicializamos el mazo y obtenemos dos cartas aleatorias 
// solo si se presiona el botón "Batallar"
$mazo = new Mazo();
$mazo->barajarMazo(); // Barajamos el mazo para obtener cartas aleatorias
$carta1 = null;
$carta2 = null;
$resultado = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener dos cartas aleatorias
    $carta1 = $mazo->getCartaAleatoria();
    $carta2 = $mazo->getCartaAleatoria();

    // Comparar las cartas
    if ($carta1->getNumero() > $carta2->getNumero()) {
        $resultado = "¡La carta 1 gana!";
    } elseif ($carta1->getNumero() < $carta2->getNumero()) {
        $resultado = "¡La carta 2 gana!";
    } else {
        $resultado = "Es un empate";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla de cartas</title>
</head>
<body>
    <h1>Batalla de cartas</h1>
    <?php
        if ($carta1) {
            echo $carta1->__toString();
        }
        if ($carta2) {
            echo $carta2->__toString();
        }
        echo "<p>$resultado</p>";        
    ?>
    <form method="post">
        <button type="submit" name="batallar">Batallar</button>
    </form>
</body>
</html>