<?php

namespace Controller;

use Model\ArregloModelo;
use Twig\Environment;

class ArreglosController {
    private $twig;

    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    public function mostrarArreglo() {
        // Obtener datos del modelo
        $modelo = new ArregloModelo();
        $datos = $modelo->obtenerDatos();

        // Renderizar la plantilla con los datos
        echo $this->twig->render('arregloVista.html.twig', ['datos' => $datos]);
    }
}

?>