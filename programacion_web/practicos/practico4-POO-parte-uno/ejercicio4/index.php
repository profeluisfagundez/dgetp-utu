<?php

    require_once('Persona.php');
    require_once('Estudiante.php');

    $walter = new Estudiante("Walter", "Bardier", "Gastronomía");
    echo $walter->getNombre();
    echo "<br>";
    echo $walter->getApellido();
    echo "<br>";
    echo $walter->getCarrera();
    echo "<br>";
    echo $walter->estudioDelEstudiante();
    echo "<br>";
    echo $walter->__toString();
    

?>