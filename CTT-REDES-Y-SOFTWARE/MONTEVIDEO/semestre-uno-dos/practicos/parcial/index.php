<?php

// =========================================
// 1. Consumo de combustible
// =========================================

echo "<h2>1. Consumo de combustible</h2>";

$kilometros = 500;
$litros = 40;

$consumo = $litros / $kilometros;

echo "Consumo promedio: " . $consumo . " litros por km";

echo "<hr>";


// =========================================
// 2. Cálculo de propina
// =========================================

echo "<h2>2. Cálculo de propina</h2>";

$cuenta = 2500;

$propina = $cuenta * 0.10;
$totalFinal = $cuenta + $propina;

echo "Propina: $" . $propina . "<br>";
echo "Total final: $" . $totalFinal;

echo "<hr>";


// =========================================
// 3. Conversor de minutos
// =========================================

echo "<h2>3. Conversor de minutos</h2>";

$minutos = 130;

$horas = intdiv($minutos, 60);
$minutosRestantes = $minutos % 60;

echo $minutos . " minutos = ";
echo $horas . " horas y ";
echo $minutosRestantes . " minutos";

echo "<hr>";


// =========================================
// 4. Cálculo de velocidad promedio
// =========================================

echo "<h2>4. Cálculo de velocidad promedio</h2>";

$distancia = 180;
$tiempo = 3;

$velocidad = $distancia / $tiempo;

echo "Velocidad promedio: " . $velocidad . " km/h";

echo "<hr>";


// =========================================
// 5. Clasificación de calificaciones
// =========================================

echo "<h2>5. Clasificación de calificaciones</h2>";

$nota = 75;

if ($nota < 60) {
    echo "Insuficiente";
} elseif ($nota >= 60 && $nota <= 79) {
    echo "Aceptable";
} else {
    echo "Excelente";
}

echo "<hr>";


// =========================================
// 6. Validación de contraseña
// =========================================

echo "<h2>6. Validación de contraseña</h2>";

$contrasena = "12345678";

if (strlen($contrasena) >= 8) {
    echo "Contraseña válida";
} else {
    echo "Contraseña inválida";
}

echo "<hr>";


// =========================================
// 7. Comparación de edades
// =========================================

echo "<h2>7. Comparación de edades</h2>";

$edad1 = 20;
$edad2 = 25;

if ($edad1 > $edad2) {
    echo "La primera persona es mayor";
} elseif ($edad2 > $edad1) {
    echo "La segunda persona es mayor";
} else {
    echo "Ambas edades son iguales";
}

echo "<hr>";


// =========================================
// 8. Cálculo de envío
// =========================================

echo "<h2>8. Cálculo de envío</h2>";

$peso = 12;

if ($peso < 5) {
    echo "Envío económico";
} elseif ($peso >= 5 && $peso <= 15) {
    echo "Envío estándar";
} else {
    echo "Envío especial";
}

echo "<hr>";


// =========================================
// 9. Verificación de acceso
// =========================================

echo "<h2>9. Verificación de acceso</h2>";

$usuario = "admin";
$contrasena = "1234";

$usuarioCorrecto = "admin";
$contrasenaCorrecta = "1234";

if ($usuario == $usuarioCorrecto && $contrasena == $contrasenaCorrecta) {
    echo "Acceso autorizado";
} else {
    echo "Acceso denegado";
}

echo "<hr>";


// =========================================
// 10. Mostrar cuadrados de números
// =========================================

echo "<h2>10. Mostrar cuadrados de números</h2>";

for ($i = 1; $i <= 15; $i++) {
    echo $i . "² = " . ($i * $i) . "<br>";
}

echo "<hr>";


// =========================================
// 11. Contador regresivo
// =========================================

echo "<h2>11. Contador regresivo</h2>";

for ($i = 20; $i >= 0; $i--) {
    echo $i . "<br>";
}

echo "<hr>";


// =========================================
// 12. Serie numérica
// =========================================

echo "<h2>12. Serie numérica</h2>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - ";
}

echo "<hr>";


// =========================================
// 13. Suma de números impares
// =========================================

echo "<h2>13. Suma de números impares</h2>";

$suma = 0;

for ($i = 1; $i <= 50; $i++) {

    if ($i % 2 != 0) {
        $suma += $i;
    }
}

echo "La suma de los números impares es: " . $suma;

echo "<hr>";


// =========================================
// 14. Patrón de asteriscos
// =========================================

echo "<h2>14. Patrón de asteriscos</h2>";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}

echo "<hr>";


// =========================================
// 15. Lista de productos
// =========================================

echo "<h2>15. Lista de productos</h2>";

$cadenaProductos = "Arroz, Leche, Pan, Azúcar";

$productos = explode(",", $cadenaProductos);

echo "<ul>";

foreach ($productos as $producto) {
    echo "<li>" . trim($producto) . "</li>";
}

echo "</ul>";

echo "Cantidad de productos: " . count($productos);

echo "<hr>";


// =========================================
// 16. Eliminación de elementos
// =========================================

echo "<h2>16. Eliminación de elementos</h2>";

$videojuegos = ["Mario", "Zelda", "Minecraft", "FIFA", "GTA"];

array_shift($videojuegos);

array_pop($videojuegos);

echo "<pre>";
print_r($videojuegos);
echo "</pre>";

echo "<hr>";


// =========================================
// 17. Unión de listas
// =========================================

echo "<h2>17. Unión de listas</h2>";

$peliculas = ["Titanic", "Avatar", "Matrix"];

$series = ["Breaking Bad", "Dark", "Stranger Things"];

$contenido = array_merge($peliculas, $series);

foreach ($contenido as $elemento) {
    echo $elemento . "<br>";
}

echo "<hr>";


// =========================================
// 18. Sistema de funciones
// =========================================

echo "<h2>18. Sistema de funciones</h2>";

function calcularDoble(float $numero): float {
    return $numero * 2;
}

function puedeVotar(int $edad):string {
    $mensaje = '';
    if ($edad >= 18) {
        $mensaje = "Puede votar";
    } else {
        $mensaje = "No puede votar";
    }
    return $mensaje;
}

function kilometrosAMetros($km) {
    return $km * 1000;
}

function sumarArreglo($numeros) {

    $suma = 0;

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    return $suma;
}

echo "Doble de 5: " . calcularDoble(5) . "<br>";

echo puedeVotar(20) . "<br>";

echo "3 km son " . kilometrosAMetros(3) . " metros<br>";

$arreglo = [10, 20, 30, 40];

echo "Suma total: " . sumarArreglo($arreglo);

?>