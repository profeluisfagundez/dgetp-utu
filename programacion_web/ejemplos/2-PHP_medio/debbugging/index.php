<?php
/* 
Existen varias formas de hacer debugging con PHP. Podemos usar las funciones comunes de
debugging hasta usar extensiones en nuestro editor de código que nos ayuden con ello. 
Existen ciertas funciones predefinidas por PHP como por ejemplo var_dump o print_r. 
Pero en frameworks como Laravel podemos llegar a tener herramientas más avanzadas de debugging
como la función dd() que veremos a continuación. Para descargarla vamos a usar composer:

*/

require("vendor/autoload.php");

class Auto {

    protected $puertas = [];
    protected $color;

    function __construct(string $color) {
        $this->color = $color;
        for ($i=0; $i < 4; $i++)
            $this->puertas[$i] = new puertasDelAuto();

    }
    
}

class puertasDelAuto {
    protected $nails = 4;
    protected $description = "Tiene rayas en el capo";
    public function get_description() : string {
        return $this->description;
    }
}

$fabrica_de_autos = array(
    "nombre" => "Cherry",
    "ubicacion" => [
        "pais" => "Uruguay",
        "fabricante" => "Montevideo",
        "tipo" => "deportivo",
        "numero" => 27
    ],
    "numero_de_autos_en_la_fabrica" => 3,
    "autos" => [
        new Auto("blanco"),
        new Auto("negro"),
        new Auto("gris"),
    ]
);
echo "<pre>";
var_dump($fabrica_de_autos);
echo "</pre>";
echo "<hr>";
dd($fabrica_de_autos);
?>