<?php

function get_country_name_switch($country)
{
    $name = "";
    switch ($country) {
        case 'MX':
            $name = "México";
            break;
        case 'COL':
            $name = "Colombia";
            break;
        case 'EUA':
            $name = "Estados Unidos Americanos";
            break;
        default:
            $name = "Lo siento, no conozco ese país";
            break;
    }
    return $name;
}

function get_country_name_match($country): String
{
    return match ($country) {
        "MX" => "México",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };
}

$resultado = get_country_name_match("MX");

echo "<p>$resultado</p>";

echo "\n";
