<?php
// 1. Suma de dos números y determinar el mayor
$num1 = 10;
$num2 = 5;
$suma = $num1 + $num2;
if ($num1 > $num2) {
    echo "La variable $num1 es mayor que la variable $num2";
} else {
    echo "La variable $num2 es mayor que la variable $num1";
}

// 2. Mayor de tres números
$num1 = 15;
$num2 = 30;
$num3 = 10;
// && Y lógico, AND
if ($num1 > $num2 && $num1 > $num3) {
    echo "El mayor es $num1";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "El mayor es $num2";
} else {
    echo "El mayor es $num3";
}

// 3. Número par o impar
$num = 7;
if ($num % 2 == 0) {
    echo "El número $num es par<br>";
} else {
    echo "El número $num es impar<br>";
}

// 4. Edad legal para votar
$edad = 25;
if ($edad >= 18) {
    echo "La persona tiene mayor de edad para votar<br>";
} else {
    echo "La persona es menor de edad para votar<br>";
}

// 5. Calculadora de IMC (Índice de Masa Corporal)
$peso = 70;
$altura = 1.75;
$imc = $peso / ($altura * $altura);
if ($imc < 18.5) {
    $mensaje = "Bajo peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $mensaje = "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    $mensaje = "Sobrepeso";
} else {
    $mensaje = "Obesidad";
}
echo "El IMC es: $imc, lo que indica: $mensaje<br>";

// 6. Año bisiesto
$anio = 2024;
if (($anio % 4 == 0 && $anio % 100 != 0) || $anio % 400 == 0) {
    echo "El año $anio es bisiesto<br>";
} else {
    echo "El año $anio no es bisiesto<br>";
}

// 7. Conversión de grados Fahrenheit a Celsius
$fahrenheit = 80;
$celsius = ($fahrenheit - 32) * 5/9;
if ($celsius > 27) {
    $mensaje = "Mayor a 27°C";
} else {
    $mensaje = "Menor a 27°C";
}
echo "La temperatura en Celsius es: $celsius°C, $mensaje<br>";

// 8. Determinar si un número es primo
$num = 17;
$es_primo = true;
if ($num <= 1) {
    $es_primo = false;
} else {
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            $es_primo = false;
            break;
        }
    }
}
if ($es_primo) {
    echo "El número $num es primo<br>";
} else {
    echo "El número $num no es primo<br>";
}
?>
