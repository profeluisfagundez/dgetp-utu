<?php
require_once('Mazo.php');

class Jugador
{
    private int $cantVidas;
    private string $nombre;
    private Mazo $mazo;
    private int $rondasGanadas;

    public function __construct(string $nombre, int $cantVidas)
    {
        $this->nombre = $nombre;
        $this->cantVidas = $cantVidas;
        $this->mazo = new Mazo();
        $this->rondasGanadas = 0; // Inicializamos las rondas ganadas a cero
    }

    public function getVidas(): int
    {
        return $this->cantVidas;
    }

    public function setVidas(int $value): void
    {
        if ($this->cantVidas >= 0) {
            $this->cantVidas -= $value;
        }
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getMazo(): Mazo
    {
        return $this->mazo;
    }

    public function getCartaMazoAleatoria(): Carta
    {
        return $this->mazo->getCartaAleatoria();
    }

    public function quedanCartas(): bool
    {
        return $this->mazo->contarCartasMazo() > 0;
    }

    public function ganarRonda(): void
    {
        $this->rondasGanadas++;
    }

    public function getRondasGanadas(): int
    {
        return $this->rondasGanadas;
    }

    public function __toString(): string
    {
        return "Nombre: " . $this->nombre . 
               ", Vidas: " . $this->cantVidas . 
               ", Rondas ganadas: " . $this->rondasGanadas . 
               ", Cartas en el mazo: " . $this->mazo->contarCartasMazo();
    }
}
?>
