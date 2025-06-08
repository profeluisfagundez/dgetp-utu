<?php 
//Estructura que permite evaluar una condición y tomar una decisión

$nombre = "Luis";
if ($nombre == "Eduardo") {
    echo "El nombre es Eduardo";
} else if($nombre == "Luis") {
    echo "El nombre es Luis";
} else if ($nombre == "Roberto") {
    echo "El nombre es Roberto";
} else {
    echo "El nombre no es ninguno de los anteriores";
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

$edad = 18;
if ($edad <= 18) {
    echo "El usuario es menor de edad";
} else {
    echo "El usuario es mayor de edad";
}



?>

