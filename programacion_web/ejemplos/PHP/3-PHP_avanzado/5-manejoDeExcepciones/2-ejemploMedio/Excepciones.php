<?php

class Excepciones extends Exception {
    public function handle() {
        echo "Excepción capturada: " . $this->getMessage();
    }
}

?>