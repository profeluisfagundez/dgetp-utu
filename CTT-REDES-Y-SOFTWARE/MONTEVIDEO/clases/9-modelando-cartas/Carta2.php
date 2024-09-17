<?php

class Carta2
{
    // Constante para los palos, lo vamos a usar para definar las cartas
    private const PALOS = ['o', 'c', 'e', 'b'];

    private $palo;
    private $num;
    private $imagen;

    // Constructor de la clase, le agregamos una validación de 0 a la cantidad de palos (4)
    public function __construct($palo, $num)
    {
        // Validación del índice del palo que se menciona arriba
        if ($palo >= 0 && $palo < count(self::PALOS)) {
            $this->palo = self::PALOS[$palo];
        } else {
            throw new InvalidArgumentException("Palo inválido.");
        }
        // Asignación del número para la carta
        $this->num = $num;
        // Generar la imagen de la carta 
        $this->actualizarImagen();
    }

    // Método para obtener el número de la carta
    public function getNumero()
    {
        return $this->num;
    }

    // Método para asignar un nuevo número a la carta
    public function setNumero($valor)
    {
        $this->num = $valor;
        // Actualiza la imagen cuando se cambia el número de la carta
        $this->actualizarImagen();
    }

    // Método para obtener el palo de la carta
    public function getPalo()
    {
        return $this->palo;
    }

    // Método para asignar un nuevo palo de la carta
    public function setPalo($indicePalo)
    {
        // Validación del índice del palo de la carta
        if ($indicePalo >= 0 && $indicePalo < count(self::PALOS)) {
            $this->palo = self::PALOS[$indicePalo];
        } else {
            throw new InvalidArgumentException("Palo inválido.");
        }
        // Actualiza la imagen cuando se cambia el palo de la carta
        $this->actualizarImagen();
    }

    // Método para obtener la imagen de la carta
    public function getImagen()
    {
        return $this->imagen;
    }

    // Método privado para actualizar la imagen de la carta
    private function actualizarImagen()
    {
        $this->imagen = "imagenes/c_" . $this->palo . "_" . $this->num . ".png";
    }

    // Método mágico para representar la carta como un string (HTML)
    public function __toString()
    {
        return "<img src='" . $this->imagen . "' alt='Carta'>";
    }
}
