<?php
require_once('../../models/JugadorModel.php');
require_once('../../models/CartaModel.php');

class PartidaController {
    private JugadorModel $jugadorHumano;
    private JugadorModel $jugadorPC;
    private int $manosGanadasHumano;
    private int $manosGanadasPC;
    private int $rondaActual;
    private int $manoActual;
    private ?CartaModel $cartaHumanoActual;  // Con esta variable imprimimos en el tablero
    private ?CartaModel $cartaPCActual;      // Con esta variable imprimimos en el tablero

    public function __construct() {
        session_start();
        if (!isset($_SESSION['jugadorHumano'])) {
            $this->jugadorHumano = new JugadorModel('Jugador Humano', 3);
            $this->jugadorPC = new JugadorModel('PC', 3);
            $_SESSION['jugadorHumano'] = $this->jugadorHumano;
            $_SESSION['jugadorPC'] = $this->jugadorPC;
            $this->rondaActual = 1;
            $this->manoActual = 1;
            $_SESSION['rondaActual'] = $this->rondaActual;
            $_SESSION['manoActual'] = $this->manoActual;
        } else {
            $this->jugadorHumano = $_SESSION['jugadorHumano'];
            $this->jugadorPC = $_SESSION['jugadorPC'];
            $this->rondaActual = $_SESSION['rondaActual'];
            $this->manoActual = $_SESSION['manoActual'];
        }
        $this->manosGanadasHumano = 0;
        $this->manosGanadasPC = 0;
        $this->cartaHumanoActual = null;  // Inicialización
        $this->cartaPCActual = null;      // Inicialización
    }

    public function batallar(): string {
        $resultado = '';

        // Obtener cartas aleatorias de cada jugador
        $this->cartaHumanoActual = $this->jugadorHumano->getCartaMazoAleatoria();
        $this->cartaPCActual = $this->jugadorPC->getCartaMazoAleatoria();

        // Comparar las cartas
        if ($this->cartaHumanoActual->getNumero() > $this->cartaPCActual->getNumero()) {
            $resultado .= $this->jugadorHumano->getNombre() . " gana la mano " . $this->manoActual . "!<br>";
            $this->manosGanadasHumano++;
        } elseif ($this->cartaHumanoActual->getNumero() < $this->cartaPCActual->getNumero()) {
            $resultado .= $this->jugadorPC->getNombre() . " gana la mano " . $this->manoActual . "!<br>";
            $this->manosGanadasPC++;
        } else {
            $resultado .= "Es un empate en la mano " . $this->manoActual . "<br>";
        }

        // Mostrar las cartas jugadas
        $resultado .= "Carta " . $this->jugadorHumano->getNombre() . ": " . $this->cartaHumanoActual->getNumero() . "<br>";
        $resultado .= "Carta " . $this->jugadorPC->getNombre() . ": " . $this->cartaPCActual->getNumero() . "<br>";

        // Incrementar el contador de manos
        $this->manoActual++;

        // Verificar si se han jugado las 3 manos
        if ($this->manoActual > 3) {
            // Determinar el ganador de la ronda
            if ($this->manosGanadasHumano > $this->manosGanadasPC) {
                $this->jugadorPC->reducirVidas();
                $resultado .= $this->jugadorHumano->getNombre() . " gana la ronda y le quita una vida a " . $this->jugadorPC->getNombre() . "!";
            } elseif ($this->manosGanadasPC > $this->manosGanadasHumano) {
                $this->jugadorHumano->reducirVidas();
                $resultado .= $this->jugadorPC->getNombre() . " gana la ronda y le quita una vida a " . $this->jugadorHumano->getNombre() . "!";
            } else {
                $resultado .= "La ronda termina en empate.";
            }

            // Reiniciar las manos para la próxima ronda
            $this->manoActual = 1;
            $this->manosGanadasHumano = 0;
            $this->manosGanadasPC = 0;
            $this->rondaActual++;
        }

        $_SESSION['rondaActual'] = $this->rondaActual;
        $_SESSION['manoActual'] = $this->manoActual;
        $_SESSION['manosGanadasHumano'] = $this->manosGanadasHumano;
        $_SESSION['manosGanadasPC'] = $this->manosGanadasPC;

        return $resultado;
    }

    // Método para verificar el estado del juego (si hay ganador)
    public function verificarEstadoJuego(): ?string {
        if ($this->jugadorHumano->getVidas() <= 0) {
            return $this->jugadorPC->getNombre();
        } elseif ($this->jugadorPC->getVidas() <= 0) {
            return $this->jugadorHumano->getNombre();
        }
        return null;
    }

    // Método para contar las cartas restantes de cada jugador
    public function contarCartasRestantes(): array {
        return [
            'contadorHumano' => $this->jugadorHumano->getMazo()->contarCartasMazo(),
            'contadorPC' => $this->jugadorPC->getMazo()->contarCartasMazo()
        ];
    }

    // Métodos para obtener las cartas actuales
    public function getCartaHumanoActual(): ?CartaModel {
        return $this->cartaHumanoActual;
    }

    public function getCartaPCActual(): ?CartaModel {
        return $this->cartaPCActual;
    }

    // Obtener los jugadores
    public function getJugadores(): array {
        return [$this->jugadorHumano, $this->jugadorPC];
    }
}
