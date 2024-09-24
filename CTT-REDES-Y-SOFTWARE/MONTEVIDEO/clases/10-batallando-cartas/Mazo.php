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
            // echo $carta->__toString();
        }
    }

    public function contarCartasMazo(): int
    {
        return count($this->mazo);
    }

    public function getCartaAleatoria(): Carta
    {
        //Contar las cartas disponibles en el mazo
        $cantCartasMazo = $this->contarCartasMazo();
        //Seleccionar un índice aleatorio
        $indiceAleatorio = mt_rand(0, $cantCartasMazo - 1);
        //Obtener la carta correspondiente:
        $carta = $this->mazo[$indiceAleatorio];
        //Eliminar la carta del mazo (queda el hueco en el array)
        unset($this->mazo[$indiceAleatorio]);
        //Reindexar el arreglo para evitar los huecos
        $this->mazo = array_values($this->mazo);
        //Devolver la carta
        return $carta;
    }

    // Barajar el mazo
    public function barajarMazo(): void
    {
        shuffle($this->mazo);
    }
}
