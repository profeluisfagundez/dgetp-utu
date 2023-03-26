<?php
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