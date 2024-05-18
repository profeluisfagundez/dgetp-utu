<?php
/*
Para empezar a trabajar con composer: composer init
Para actualziar los cambios: composer dump
Para instalar composer: composer install
PSR son un conjunto de reglas o estandares que definen como trabajar con el lenguaje. 
Basicamente un grupo de programadores de PHP se reunieron, crearon PHP Fig y definieron esos estandares.
PSR-4 hace referencia a que, todos los espacios de nombre deben hacer referrencia hacia la carpeta
en donde dichos archivos estan ubicados.
Composer usa este PSR para lograra hacer la autocarga de sus archivos, es decir,
ya no temeos que preocuparnos de usar include y require, Composer lo hace por nosotros gracias a PSR-4
Las clases deben llamarse igual que el archivo
El namespace debe ser el nombre de la carpeta donde se encuentra
*/

// Ruta al archivo autoload.php relativa a index.php
$autoloadPath = __DIR__ . '/vendor/autoload.php';

// Verificar si el archivo existe antes de incluirlo
if (file_exists($autoloadPath)) {
    require $autoloadPath;
} else {
    // Manejar el caso en el que el archivo autoload.php no existe
    die('Error: El archivo autoload.php no se encuentra. Asegúrate de haber ejecutado "composer install".');
}
crearGato();