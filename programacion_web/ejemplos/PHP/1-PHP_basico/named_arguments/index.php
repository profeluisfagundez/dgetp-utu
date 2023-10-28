<?php

function get_person_info($name, $age, $country) {
    echo "<p>Tengo la información de $name, tiene $age años y vive en $country</p>";
}

get_person_info(
    age: 30,
    country: "Uruguay",
    name: "Luis"
);

echo "<br>";

?>