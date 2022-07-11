<?php 
/*
Es el equivalente a los objetos JSON de JavaScript 
Podemos ver su contenido como una lista
Los subíndices en lugar de ser números, son palabras más fáciles de recordar.
*/
$dinero = array (
    "Luis" => 60000,
    "Gonzalo" => 40000,
    "Martin" => 30000,
    "Pedro" => 90000,
);
echo "Luis gana ".$dinero['Luis']." pesos uruguayos al mes. \n";

$cafe = array (
    "negro" => 50,
    "late" =>  60,
    "expreso" => 70,
    "capuchino" => 90,
    "amargo" => 60,
    "lagrima" => 80,
);
echo "El valor de un café expreso es {$cafe['expreso']} en la cotización del día de hoy. \n";

$pokemon = array(
    'pikachu' => array(
        'numero' => 25,
        'tipo' => 'eléctrico',
        'ataque' => 'placaje',
        'debilidades' => array(
            'debilidad 1' => 'tierra'
        )
    ),

    'bulbasuur' => array(
        'numero' => 1,
        'tipo' => 'planta',
        'ataque' => 'placaje',
        'debilidades' => array(
            'debilidad 1' => 'Fuego',
            'debilidad 2' => 'Hielo',
            'debilidad 3' => 'volador'
      )
    ),

    'charmander' => array(
        'numero' => 4,
        'tipo' => 'fuego',
        'ataque' => 'placaje',
        'debilidades' => array(
            'debilidad 1' => 'agua',
            'debilidad 2' => 'tierra',
            'debilidad 3' => 'roca'
        )
    )
);

echo "Pikachu es el número {$pokemon['pikachu']['numero']} y es de tipo {$pokemon['pikachu']['tipo']} \n";
?>