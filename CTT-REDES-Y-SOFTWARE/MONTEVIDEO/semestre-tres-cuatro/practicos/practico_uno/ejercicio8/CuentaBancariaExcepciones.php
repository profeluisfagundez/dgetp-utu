<?php

require_once 'CuentaBancaria.php';

class CuentaBancariaExcepciones extends CuentaBancaria {
    public function retirar(float $cantidad): void {
        if ($cantidad > $this->getSaldo()) {
            throw new Exception("No puedes retirar más de lo que tienes en tu cuenta.");
        }
        parent::retirar($cantidad);
    }
}

?>
