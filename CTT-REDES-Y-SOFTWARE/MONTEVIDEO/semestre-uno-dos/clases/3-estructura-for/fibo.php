<?php

echo "Serie de Fibonacci hasta $n términos:<br>";
$a = 0;
$b = 0;
echo "$a $b ";

for ($i = 2; $i < $n; $i++) {
    $siguiente = $a + $b;
    echo "$siguiente ";
    $a = $b;
    $b = $siguiente;
}
?>
