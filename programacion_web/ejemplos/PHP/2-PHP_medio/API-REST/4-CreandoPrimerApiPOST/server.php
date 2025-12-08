<?php

// Definimos los recursos disponibles para hacer la petición
$allowedResourceType = [
    'books',
    'authors',
    'genres',
];

// Validamos que el recurso este disponible en nuestro servidor
$resourceType = $_GET['resource_type'];

//Preguntamos, si existe el recurso en el array, seguimos, sino, detenemos la app
if (!in_array($resourceType, $allowedResourceType)) {
    die;
}

// Defino los recursos que mencionamos arriba
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

// Levantamos el id del recurso buscado
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';

// Generamos la respuesta asumiendo que el pedido es correcto, mucho cuidado con los nombres de las variables
switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
    case 'GET':
        if (empty($resourceId)) {
            echo json_encode($books);
        } else {
            if (array_key_exists($resourceId, $books)) {
                echo json_encode($books[$resourceId]);
            }
        }
        break;
    case 'POST':
        case 'POST':
            $json = file_get_contents('php://input');
            $books[] = json_decode($json, true);
            //echo array_keys( $books )[count($books) -1];
            echo json_encode($books);
            break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
}
