<?php
$entrada = $_POST["frutas"];
$frutas = explode(",", $entrada);
$frutas = array_map("trim", $frutas);
$frutaBuscada = "Manzana";
if (in_array($frutaBuscada, $frutas)) {
    echo "La fruta '$frutaBuscada' SÍ está en la lista.";
} else {
        echo "La fruta '$frutaBuscada' NO está en la lista.";
}

echo "<br><br>Lista procesada:<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

?>