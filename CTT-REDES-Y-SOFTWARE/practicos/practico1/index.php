<?php
// Ejercicio 1
$numero1 = 10;
$numero2 = 5;

// Suma
$suma = $numero1 + $numero2;
echo "Suma: " . $suma . "<br>";

// Resta
$resta = $numero1 - $numero2;
echo "Resta: " . $resta . "<br>";

// Multiplicación
$multiplicacion = $numero1 * $numero2;
echo "Multiplicación: " . $multiplicacion . "<br>";

// División
$division = $numero1 / $numero2;
echo "División: " . $division . "<br>";

// Ejercicio 2
$celsius = 20;
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "Temperatura en Fahrenheit: " . $fahrenheit . "<br>";

// Ejercicio 3
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "Promedio: " . $promedio . "<br>";

// Ejercicio 4
$precio = 100;
$porcentaje_descuento = 20;
$descuento = $precio * ($porcentaje_descuento / 100);
$precio_final = $precio - $descuento;
echo "Precio final con descuento: " . $precio_final . "<br>";

// Ejercicio 5
$peso_kg = 70;
$altura_m = 1.75;
$imc = $peso_kg / ($altura_m * $altura_m);
echo "IMC: " . $imc . "<br>";

// Ejercicio 6
$ancho = 5;
$largo = 10;
$area = $ancho * $largo;
$perimetro = 2 * ($ancho + $largo);
echo "Área: " . $area . "<br>";
echo "Perímetro: " . $perimetro . "<br>";

// Ejercicio 7
$edad_anios = 25;
$edad_dias = $edad_anios * 365;
echo "Edad en días: " . $edad_dias . "<br>";
