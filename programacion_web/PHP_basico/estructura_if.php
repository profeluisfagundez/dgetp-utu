<?php
//Estructura que permite evaluar una condición y tomar una decisión

$numero_entero = 15;

//Estructura IF simple
if ( $numero_entero >= 18 ){
    echo "El usuario es mayor\n";
}
else{
    echo "El usuario es menor\n";
}

//Estructura IF anidada
if ( $numero_entero >= 18 ){
    echo "El usuario es mayor\n";
} elseif ( $numero_entero >= 15 ){
   echo "El usuario tiene entre 15 y 18 años\n"; 
}
else {
    echo "El usuario es menor a 18 años\n";
}

?>
