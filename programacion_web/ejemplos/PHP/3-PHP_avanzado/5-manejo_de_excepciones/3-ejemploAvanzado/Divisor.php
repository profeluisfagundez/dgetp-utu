<?php
require_once('Excepciones.php');
class Divisor {
    public function __construct(){}
    
    public function dividir($a, $b) {
        try {
            if ($b === 0) {
                $errorCode = 1001;
                $additionalData = ['dividend' => $a, 'divisor' => $b];
                throw new Excepciones("No se puede dividir entre cero", $errorCode, $additionalData);
            }
            $result = $a / $b;
            return $result;
        } catch (Excepciones $e) {
            $e->handle();
        }
    }
}

?>