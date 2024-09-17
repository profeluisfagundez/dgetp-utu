<?php

require_once('Carta.php');

class Mazo
{
    private $_mazo = [];

    public function __construct()
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $carta = new Carta($i, $j);
                array_push($this->_mazo, $carta);
            }
        }
    }

    public function getMazo()
    {
        return $this->_mazo;
    }

    public function mostrarMazo()
    {
        foreach ($this->_mazo as $carta) {
            echo $carta;
        }
    }

    public function contarCartasMazo()
    {
        return count($this->_mazo);
    }

    public function getCartaAleatoria()
    {
        $cantCartasMazo = $this->contarCartasMazo();
        $indiceAleatorio = mt_rand(0, $cantCartasMazo - 1);
        $carta = $this->_mazo[$indiceAleatorio];
        unset($this->_mazo[$indiceAleatorio]);
        $this->_mazo = array_values($this->_mazo); // Reindexar el array
        return $carta;
    }
}
