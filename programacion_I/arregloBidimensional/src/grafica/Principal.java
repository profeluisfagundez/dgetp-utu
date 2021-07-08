package grafica;

import java.util.Scanner;

public class Principal {

    public static void main(String[] args) {
        /*Declaro un arreglo bidimensional, este arreglo contiene 20 filas
        y 2 columnas*/
        String[][] arregloAlumnos = new String[20][2];
        Scanner lector = new Scanner(System.in);
        String nombre, apellido;

        /*Cargo los datos dentro del arreglo bidimensional*/
        for (int x = 0; x < arregloAlumnos.length; x++) {
                System.out.println("Ingrese el nombre: ");
                nombre = lector.nextLine();
                arregloAlumnos[x][0] = nombre;
            for (int y = 1; y < arregloAlumnos[x].length; y++) {
                System.out.println("Ingrese el apellido: ");
                apellido = lector.nextLine();
                arregloAlumnos[x][y] = apellido;
            }
        }        
        
        /*Muestro el contenido del arreglo*/
        System.out.println("| Nombre | | Apellido |");
        for (int x = 0; x < arregloAlumnos.length; x++) {
            for (int y = 0; y < arregloAlumnos[x].length; y++) {
                System.out.print(" | " + arregloAlumnos[x][y] + " | ");
            }
            System.out.println("");
        }
    }

}
