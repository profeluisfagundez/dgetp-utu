<?php
class Persona {
    private String $nombre;
    private String $apellido;
    private int $edad;

    public function __construct(String $nombre, String $apellido, int $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $value){
        $this->nombre = $value;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function setEdad(int $value){
        if ($value < 0) {
            echo "La edad no puede ser negativa o 0";
        } else {
            $this->edad = $value;
        }
        
    }

    public function mostrarInformacion() {
        return "<p>Nombre: $this->nombre</p>
                <p>Apellido: $this->apellido</p>
                <p>Edad: $this->edad años</p>";
    }
}
?>
