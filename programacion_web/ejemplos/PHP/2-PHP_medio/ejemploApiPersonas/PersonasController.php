<?php

class PersonasController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function handleRequest($request_method, $uri_segments)
    {
        $conn = $this->db->getConnection();

        if ($request_method == "GET") {
            if (count($uri_segments) == 2) {
                // Consultar todas las personas
                $sql = "SELECT * FROM personas";
                $result = $conn->query($sql);
                $persons = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $persons[] = $row;
                    }
                    print_r($persons);
                }
                header("Content-Type: application/json");
                echo json_encode($persons);
            } elseif (count($uri_segments) == 3 && is_numeric($uri_segments[2])) {
                // Consultar una persona específica
                $person_id = $uri_segments[2];
                $sql = "SELECT * FROM personas WHERE id = $person_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $person = $result->fetch_assoc();
                    header("Content-Type: application/json");
                    echo json_encode($person);
                    print_r($person);
                } else {
                    header("HTTP/1.1 404 Not Found");
                }
            } else {
                header("HTTP/1.1 400 Bad Request");
            }
        } elseif ($request_method == "POST") {
            // Leer los datos enviados en el cuerpo de la solicitud
            $data = json_decode(file_get_contents("php://input"));

            // Validar los datos
            if (!empty($data->nombre) && !empty($data->apellido) && is_numeric($data->edad)) {
                // Insertar una nueva persona en la base de datos
                $nombre = $conn->real_escape_string($data->nombre);
                $apellido = $conn->real_escape_string($data->apellido);
                $edad = $data->edad;
                $sql = "INSERT INTO personas (nombre, apellido, edad) VALUES ('$nombre', '$apellido', $edad)";
                if ($conn->query($sql) === TRUE) {
                    header("HTTP/1.1 201 Created");
                    echo json_encode(array("message" => "Persona creada exitosamente"));
                } else {
                    header("HTTP/1.1 500 Internal Server Error");
                    echo json_encode(array("error" => $conn->error));
                }
            } else {
                header("HTTP/1.1 400 Bad Request");
                echo json_encode(array("message" => "Datos de persona no válidos"));
            }
        } elseif ($request_method == "PUT") {
            if (count($uri_segments) == 3 && is_numeric($uri_segments[2])) {
                // Leer los datos enviados en el cuerpo de la solicitud
                $data = json_decode(file_get_contents("php://input"));

                // Validar los datos
                if (!empty($data->nombre) && !empty($data->apellido) && is_numeric($data->edad)) {
                    // ID de la persona a actualizar
                    $person_id = $uri_segments[2];
                    $nombre = $conn->real_escape_string($data->nombre);
                    $apellido = $conn->real_escape_string($data->apellido);
                    $edad = $data->edad;

                    $sql = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', edad = $edad WHERE id = $person_id";
                    if ($conn->query($sql) === TRUE) {
                        header("HTTP/1.1 200 OK");
                        echo json_encode(array("message" => "Persona actualizada exitosamente"));
                    } else {
                        header("HTTP/1.1 500 Internal Server Error");
                        echo json_encode(array("error" => $conn->error));
                    }
                } else {
                    header("HTTP/1.1 400 Bad Request");
                    echo json_encode(array("message" => "Datos de persona no válidos"));
                }
            } else {
                header("HTTP/1.1 400 Bad Request");
            }
        } elseif ($request_method == "DELETE") {
            if (count($uri_segments) == 3 && is_numeric($uri_segments[2])) {
                // ID de la persona a eliminar
                $person_id = $uri_segments[2];

                $sql = "DELETE FROM personas WHERE id = $person_id";
                if ($conn->query($sql) === TRUE) {
                    header("HTTP/1.1 200 OK");
                    echo json_encode(array("message" => "Persona eliminada exitosamente"));
                } else {
                    header("HTTP/1.1 500 Internal Server Error");
                    echo json_encode(array("error" => $conn->error));
                }
            } else {
                header("HTTP/1.1 400 Bad Request");
            }
        }
    }
}
