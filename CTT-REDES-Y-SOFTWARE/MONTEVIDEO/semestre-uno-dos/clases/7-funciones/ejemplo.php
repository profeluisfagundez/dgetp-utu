<?php
$primerValor = 15;
$segundoValor = 20;
echo "<h1>Funciones en PHP</h1>";

function sumar($numeroUno, $numeroDos):Int {
    $suma = $numeroUno + $numeroDos;
    return $suma;
};

function mostrarDatos(){
    echo "<h2>Bienvenidos a mi app</h2>";
    echo "<h2>gracias por usar nuestro sistema</h2>";
    echo "<h3>Esto es una prueba gratuita jaja</h3>";
} 

echo mostrarDatos();
$suma = sumar($primerValor, $segundoValor);
echo $suma;
?>