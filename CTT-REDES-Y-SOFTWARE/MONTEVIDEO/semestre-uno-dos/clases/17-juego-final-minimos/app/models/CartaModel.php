<?php

class CartaModel
{
    // Constante para los palos, lo vamos a usar para definar las cartas
    private const PALOS = ['o', 'c', 'e', 'b'];
    private $palo;
    private $num;
    private $imagen;

    public function __construct($palo, $num)
    {
        $this->palo = self::PALOS[$palo];
        $this->num = $num;
        $this->imagen = "imagenes/c_" . self::PALOS[$palo] . "_" . 
        $this->getNumero() . ".png";
    }

    public function getNumero()
    {
        return $this->num;
    }

    public function setNumero($valor)
    {
        $this->num = $valor;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getPalo()
    {
        return $this->palo;
    }

    public function setPalo($valor)
    {
        $this->palo = $valor;
    }

    public function __toString()
    {
        return "<img src='" . $this->imagen . "'>";
    }
}
