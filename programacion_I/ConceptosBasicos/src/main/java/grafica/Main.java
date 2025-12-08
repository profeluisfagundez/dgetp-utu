package grafica;

import java.util.Scanner;
import logica.Botella;

/**
 *
 * @author eduardo
 */
public class Main {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String capacidad;
        Botella botellita = new Botella("Salus", "600ml", "limonada", 12345678);
        Botella garrafa = new Botella();
        System.out.println("La botella es de marca: " + botellita.getMarca());
        System.out.println("La capacidad de la botella es: " + botellita.getCapacidad());
        garrafa.setMarca("Nix");
        System.out.println(garrafa.getMarca());
        System.out.println("Ingrese la capacidad de la " + garrafa.getMarca() + " :");
        capacidad = sc.nextLine();
        System.out.println("La capacidad de la " + garrafa.getMarca() + " es de: " + capacidad);

    }
}
