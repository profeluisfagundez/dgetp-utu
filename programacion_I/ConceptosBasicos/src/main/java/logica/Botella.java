package logica;

public class Botella {

    //Declaro atributos
    private String marca;
    private String capacidad;
    private String sabor;
    private int codigoDeBarra;

    //Constructor de la clase
    public Botella(String marca, String capacidad, String sabor, int codigoDeBarra) {
        this.marca = marca;
        this.capacidad = capacidad;
        this.sabor = sabor;
        this.codigoDeBarra = this.codigoDeBarra;
    }

    public Botella() {

    }

    //Métodos
    public String getMarca() {
        return this.marca;
    }

    public String getCapacidad() {
        return this.capacidad;
    }

    public String getSabor() {
        return sabor;
    }

    public int getCodigoDeBarra() {
        return codigoDeBarra;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public void setCapacidad(String capacidad) {
        this.capacidad = capacidad;
    }

    public void setSabor(String sabor) {
        this.sabor = sabor;
    }

    public void setCodigoDeBarra(int codigoDeBarra) {
        this.codigoDeBarra = codigoDeBarra;
    }
}
