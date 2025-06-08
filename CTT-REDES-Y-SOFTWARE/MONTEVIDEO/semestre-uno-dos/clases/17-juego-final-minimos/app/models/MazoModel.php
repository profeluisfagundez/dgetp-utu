<?php

require_once('CartaModel.php');

class MazoModel
{
    private $mazo = [];

    public function __construct()
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $carta = new CartaModel($i, $j);
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

    public function getCartaAleatoria(): ?CartaModel
    {
        // Si no quedan cartas, devolver null
        if ($this->contarCartasMazo() == 0) {
            return null;
        }
        
        // Seleccionar un índice aleatorio
        $indiceAleatorio = mt_rand(0, $this->contarCartasMazo() - 1);
        // Obtener la carta correspondiente:
        $carta = $this->mazo[$indiceAleatorio];
        // Eliminar la carta del mazo
        unset($this->mazo[$indiceAleatorio]);
        // Reindexar el arreglo para evitar los huecos
        $this->mazo = array_values($this->mazo);
        return $carta;
    }

    public function barajarMazo(): void
    {
        shuffle($this->mazo);
    }

    public function reiniciarMazo():void {
        $this->mazo = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $carta = new CartaModel($i, $j);
                array_push($this->mazo, $carta);
            }
        }
    }
}
