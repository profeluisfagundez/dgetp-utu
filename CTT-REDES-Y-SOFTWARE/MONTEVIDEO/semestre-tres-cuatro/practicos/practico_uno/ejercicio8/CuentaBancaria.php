<?php

require_once("OperacionesBancarias.php");

class CuentaBancaria implements OperacionesBancarias {
    private float $saldo;
    private string $titular;

    public function __construct(string $titular, float $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getTitular(): string {
        return $this->titular;
    }

    public function depositar(float $cantidad): void {
        $this->saldo += $cantidad;
    }

    public function retirar(float $cantidad): void {
        if ($cantidad > $this->saldo) {
            throw new Exception("Fondos insuficientes.");
        }
        $this->saldo -= $cantidad;
    }
}

?>
