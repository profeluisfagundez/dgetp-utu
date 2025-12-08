<?php

//Petición básica: curl http://localhost:8000/\?resource_type\=books  

//Definimos los recursos disponibles que se van a solicitar mediante REST
$allowResourcesTypes = [
    'books',
    'authors',
    'genres',
];

//Defino los recursos que van a ser consumidos por la app
$books = [
    1 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_autor' => 2,
        'id_genero' => 2,
    ],
    2 => [
        'titulo' => 'La Iliada',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
    3 => [
        'titulo' => 'La Odisea',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
];


// Se indica al cliente que lo que recibirá es un json
header('Content-Type: application/json');

//Se delimita la petición a los 4 métodos básicos de HTTP
switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
    case 'GET':
        //Codifica como Json el arreglo de libros
        echo json_encode($books);
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
}

//Obtenemos el recurso que viene por GET
$resourceType = $_GET['resource_type'];

//Si el recurso que viene por GET está definido en el arreglo se lo devuelve
if (!in_array($resourceType, $allowResourcesTypes)) {
    die;
}
