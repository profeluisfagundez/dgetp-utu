<?php
trait MensajeSaludo {
    public function saludar(): void {
        echo "Hola, mi nombre es " . $this->getNombre();
    }
}


?>
