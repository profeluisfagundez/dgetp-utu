<?php

setcookie(
    name: "subdomain_cookie",
    value: "Esta cookie solo está disponible en /configuracion",
    expires_or_options: time() + 60,
    path: "PROGRAMACION_WEB/PHP_medio/cookies/configuracion/",
    domain: "localhost",
    secure: false,
    httponly: true
);

echo "<h1>Estoy en Configuración</h1>";
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>