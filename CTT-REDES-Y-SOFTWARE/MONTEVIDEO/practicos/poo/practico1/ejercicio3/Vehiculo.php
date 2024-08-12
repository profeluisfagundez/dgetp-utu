<?php
class Vehiculo {
    public $marca;
    public $modelo;
    public $año;
    public $kilometraje;

    public function __construct($marca, $modelo, $año, $kilometraje) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->kilometraje = $kilometraje;
    }

    public function actualizarKilometraje($nuevoKilometraje) {
        $this->kilometraje += $nuevoKilometraje;
    }

    public function mostrarInformacion() {
        return "<p>Marca: $this->marca</p>
                <p>Modelo: $this->modelo</p>
                <p>Año: $this->año</p>
                <p>Kilometraje: $this->kilometraje km</p>";
    }
}
?>
