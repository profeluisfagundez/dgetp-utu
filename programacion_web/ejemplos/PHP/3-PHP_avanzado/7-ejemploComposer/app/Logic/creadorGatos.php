<?php

use App\Classes\GatoAdoptado;
use App\Classes\GatoDisponible;

function crearGato()
{
    $gatitoUno = new GatoDisponible("Jose", "verde", "15");
    $gatitoDos = new GatoAdoptado("Pedrito", "2", "Sergio");
    $texto = $gatitoUno->maullar();
    $textoDos = $gatitoDos->maullar();
    echo "<p>Gato disponible: $texto</p>";
    echo "<p>Gato disponible: $textoDos</p>";
}
