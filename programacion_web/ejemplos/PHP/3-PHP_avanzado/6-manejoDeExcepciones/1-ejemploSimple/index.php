<?php

function division(){
    $resultado = 20/0;
    return $resultado;
}

try {
    $result = division();
    echo "<p>$result</p>";
} catch (\Throwable $th) {
    echo "<pre>";
        var_dump($th->getTrace());
    echo "</pre>";
}

?>

