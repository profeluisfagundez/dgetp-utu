# Usamos la imagen oficial de PHP con Apache, es una versión estable en teoría
FROM php:8.2-apache

# Instala el driver de MySQL (PDO) para PHP.
# Esto es necesario para que nuestro mini script index.php pueda conectarse a la base de datos.
RUN docker-php-ext-install pdo pdo_mysql

# Copia todo el contenido de la carpeta 'src' del host
# al directorio por defecto de Apache dentro del contenedor.
COPY src/ /var/www/html/

# (Opcional) Informar que el contenedor va a usar el puerto 80.
# Esto es documentation, no expone el puerto. Eso se hace con -p en docker run por las dudas....
EXPOSE 80