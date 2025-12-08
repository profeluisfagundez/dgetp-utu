
<?php
// Declarar una variable y asignar un valor
$nombre = "Luis";
$edad = 30;

// Imprimir variables en pantalla
echo "Hola, mi nombre es $nombre y tengo $edad años.";
?>


<?php
$nota = 12;
// Estructura condicional
if ($nota >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
?>


<?php
$contador = 1;

// Bucle while
while ($contador <= 5) {
    echo "Iteración $contador <br>";
    $contador++;
}
?>

<?php
// Declarar y utilizar un array
$colores = array("rojo", "verde", "azul");

// Acceder a elementos del array
echo "El primer color es: " . $colores[0];
?>

<?php
// Declarar una función
function saludar($nombre) {
    echo "Hola, $nombre!";
}

// Llamar a la función
saludar("Luis");
?>

<?php
// Superglobal $_GET
$nombre = $_GET['nombre'];

// Superglobal $_POST
$correo = $_POST['correo'];
?>


