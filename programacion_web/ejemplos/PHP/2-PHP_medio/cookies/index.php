<?php
/*
*Las cookies son un mecanismo por el que se almacenan datos en el navegador 
*remoto para monitorizar o identificar a los usuarios que vuelvan al sito web. 
*Las cookies se pueden configurar con las funciones setcookie() o setrawcookie().
*La variable superglobal que estaremos utilizando para manejar las cookies será
*$_COOKIES, está variable es una arreglo que contendrá información de nuestra 
*cookie.
*/
if ( !isset( $_COOKIE["ejemplo_cookie"] ) ) {
    
    setcookie(
        name: "ejemplo_cookie",
        value: "una cookie salvaje aparece",
        expires_or_options: 0,
        path: "/",
        domain: "localhost",
        secure: false,
        httponly: true
    );
    echo "¡Cookie creada correctamente!";

}
echo "<h1>Estoy en cookies inicial</h1>";
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>