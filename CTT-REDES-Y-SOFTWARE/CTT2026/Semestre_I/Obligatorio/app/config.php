<?php

session_start();

/*
|--------------------------------------------------------------------------
| Usuarios del sistema de ejemplo.
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['usuarios'])) {

    $_SESSION['usuarios'] = [
        // Administradores
        [ "id" => 1, "user" => "admin1", "password" => "1234", "nombre" => "Luis", "apellido" => "Gonzalez", "tipo" => "administrador"],
        [ "id" => 2, "user" => "admin2", "password" => "1234", "nombre" => "Eduardo", "apellido" => "Perez", "tipo" => "administrador"],
        [ "id" => 3, "user" => "admin3", "password" => "1234", "nombre" => "Mateo", "apellido" => "Rodriguez", "tipo" => "administrador"],
        [ "id" => 4, "user" => "admin4", "password" => "1234", "nombre" => "Maria", "apellido" => "Lopez", "tipo" => "administrador"],
        [ "id" => 5, "user" => "admin5", "password" => "1234", "nombre" => "Gonzalo", "apellido" => "Silva", "tipo" => "administrador"],
        [ "id" => 6, "user" => "admin6", "password" => "1234", "nombre" => "Pedro", "apellido" => "Fernandez", "tipo" => "administrador"],
        [ "id" => 7, "user" => "admin7", "password" => "1234", "nombre" => "Josefina", "apellido" => "Martinez", "tipo" => "administrador"],
        [ "id" => 8, "user" => "admin8", "password" => "1234", "nombre" => "Guillermo", "apellido" => "Suarez", "tipo" => "administrador"],
        [ "id" => 9, "user" => "admin9", "password" => "1234", "nombre" => "Sergio", "apellido" => "Acosta", "tipo" => "administrador"],
        [ "id" => 10, "user" => "admin10", "password" => "1234", "nombre" => "Rodrigo", "apellido" => "Sosa", "tipo" => "administrador"],
        // Compradores
        [ "id" => 11, "user" => "cliente1", "password" => "1234", "nombre" => "Ana", "apellido" => "Perez", "tipo" => "comprador"],
        [ "id" => 12, "user" => "cliente2", "password" => "1234", "nombre" => "Lucia", "apellido" => "Gomez", "tipo" => "comprador"],
        [ "id" => 13, "user" => "cliente3", "password" => "1234", "nombre" => "Valentina", "apellido" => "Rodriguez", "tipo" => "comprador"],
        [ "id" => 14, "user" => "cliente4", "password" => "1234", "nombre" => "Camila", "apellido" => "Silva", "tipo" => "comprador"],
        [ "id" => 15, "user" => "cliente5", "password" => "1234", "nombre" => "Martin", "apellido" => "Lopez", "tipo" => "comprador" ],
        [ "id" => 16, "user" => "cliente6", "password" => "1234", "nombre" => "Fernando", "apellido" => "Suarez", "tipo" => "comprador" ],
        [ "id" => 17, "user" => "cliente7", "password" => "1234", "nombre" => "Paula", "apellido" => "Fernandez", "tipo" => "comprador" ],
        [ "id" => 18, "user" => "cliente8", "password" => "1234", "nombre" => "Carolina", "apellido" => "Martinez", "tipo" => "comprador" ],
        [ "id" => 19, "user" => "cliente9", "password" => "1234", "nombre" => "Sofia", "apellido" => "Acosta", "tipo" => "comprador" ],
        [ "id" => 20, "user" => "cliente10", "password" => "1234", "nombre" => "Julieta", "apellido" => "Sosa", "tipo" => "comprador" ]
    ];
}

/*
|--------------------------------------------------------------------------
| Autos de prueba para el sistema de ejemplo.
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['autos'])) {
    $_SESSION['autos'] = [
        [ "id" => 1, "marca" => "Toyota", "modelo" => "Corolla", "anio" => 2022, "color" => "Blanco", "kilometros" => 25000, "precio" => 22000 ],
        [ "id" => 2, "marca" => "Volkswagen", "modelo" => "Gol", "anio" => 2021, "color" => "Rojo", "kilometros" => 38000, "precio" => 16000 ],
        [ "id" => 3, "marca" => "Chevrolet", "modelo" => "Onix", "anio" => 2023, "color" => "Negro", "kilometros" => 12000, "precio" => 24000 ],
        [ "id" => 4, "marca" => "Hyundai", "modelo" => "HB20", "anio" => 2020, "color" => "Gris", "kilometros" => 50000, "precio" => 17500 ],
        [ "id" => 5, "marca" => "Renault", "modelo" => "Kwid", "anio" => 2024, "color" => "Azul", "kilometros" => 5000, "precio" => 19500 ]
    ];
}