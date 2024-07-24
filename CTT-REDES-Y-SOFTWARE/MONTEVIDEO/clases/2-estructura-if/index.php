<?php 
//Estructura que permite evaluar una condición y tomar una decisión

$nombre = "Luis";
if ($nombre == "Eduardo") {
    echo "El nombre es Eduardo";
} else if($nombre == "Luis") {
    echo "El nombre es Luis";
} else {
    echo "El nombre es Otro";
}

$nombre = "Luis";
if ($nombre == "Eduardo") {
    echo "El nombre es Eduardo";
} else {
    echo "El nombre es Luis";
}

$numero_entero = 15;
//Estructura IF simple
if ( $numero_entero >= 18 ){
    echo "El usuario es mayor";
}
else{
    echo "El usuario es menor";
}

//Estructura IF anidada
if ( $numero_entero >= 18 ){
    echo "El usuario es mayor";
} elseif ( $numero_entero >= 15 ){
   echo "El usuario tiene entre 15 y 18 años"; 
}
else {
    echo "El usuario es menor a 18 años";
}

?>

