<?php

require_once('Carta.php');

class Mazo
{
    private $mazo = [];

    public function __construct()
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $carta = new Carta($i, $j);
                array_push($this->mazo, $carta);
            }
        }
    }

    public function getMazo(): array
    {
        return $this->mazo;
    }

    public function mostrarMazo(): void
    {
        foreach ($this->mazo as $carta) {
            echo $carta;
        }
    }

    public function contarCartasMazo(): int
    {
        return count($this->mazo);
    }

    public function getCartaAleatoria(): Carta
    {
        $cantCartasMazo = $this->contarCartasMazo();
        $indiceAleatorio = mt_rand(0, $cantCartasMazo - 1);
        $carta = $this->mazo[$indiceAleatorio];
        unset($this->mazo[$indiceAleatorio]);
        $this->mazo = array_values($this->mazo); // Reindexar el array
        return $carta;
    }

    // Barajar el mazo
    public function barajarMazo(): void
    {
        shuffle($this->mazo);
    }
}
