<?php
class Vehiculo {
    public String $marca;
    public String $modelo;
    public String $año;
    public String $kilometraje;

    public function __construct(String $marca, String $modelo, String $año, String $kilometraje) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->kilometraje = $kilometraje;
    }

 

    public function actualizarKilometraje(String $nuevoKilometraje) {
        $this->kilometraje += $nuevoKilometraje;
        //$this->kilometraje = $this->kilometraje + $nuevoKilometraje;
    }

    public function mostrarInformacion() {
        return "<p>Marca: $this->marca</p>
                <p>Modelo: $this->modelo</p>
                <p>Año: $this->año</p>
                <p>Kilometraje: $this->kilometraje km</p>";
    }
}
?>
