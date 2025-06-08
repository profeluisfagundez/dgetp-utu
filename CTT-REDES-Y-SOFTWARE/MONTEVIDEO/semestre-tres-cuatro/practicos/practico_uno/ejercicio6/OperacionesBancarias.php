<?php
interface OperacionesBancarias {
    public function depositar(float $cantidad): void;
    public function retirar(float $cantidad): void;
}

