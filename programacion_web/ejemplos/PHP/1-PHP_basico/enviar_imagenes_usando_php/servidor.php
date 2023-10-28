<?php
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $name_of_file = $_FILES["image"]["name"];
    $size_of_file = $_FILES["image"]["size"];
    echo "El nombre del archivo es: ".$name_of_file." y el tamaño del archivo es: ".$size_of_file;
?>