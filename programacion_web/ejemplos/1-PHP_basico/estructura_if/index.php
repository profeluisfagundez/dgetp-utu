<?php
//Estructura que permite evaluar una condición y tomar una decisión

$numero_entero = 15;

//Estructura IF simple
if ( $numero_entero >= 18 ){
    echo "<p>El usuario es mayor</p>";
}
else{
    echo "<p>El usuario es menor</p>";
}

//Estructura IF anidada
if ( $numero_entero >= 18 ){
    echo "<p>El usuario es mayor</p>";
} elseif ( $numero_entero >= 15 ){
   echo "<p>El usuario tiene entre 15 y 18 años</p>"; 
}
else {
    echo "<p>El usuario es menor a 18 años</p>";
}

?>
