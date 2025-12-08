<?php

require_once 'Persona.php';
require_once 'MensajeSaludo.php';

class PersonaConSaludo extends Persona {
    use MensajeSaludo;
}

?>