// Evitar var por comportamientos inseguros del lenguaje en sus primeras versiones
var bloquesRojos = true;      // booleano
var bloquesRojos = 5;          // redeclaración y cambio de tipo
console.log(bloquesRojos);     // 5

let contador = 0;
let mensaje = "Bienvenidos";
// let contador = 5; tenemos un error, no se puede redeclarar una variable con let
contador = 5; // pero sí podemos cambiar su valor
console.log(contador);

const PI = 3.14159;
// PI = 4;           // Error: no puedes reasignar una constante.
// const PI = 42;    // Error: no puedes redeclararla.
console.log(PI);      // 3.14159