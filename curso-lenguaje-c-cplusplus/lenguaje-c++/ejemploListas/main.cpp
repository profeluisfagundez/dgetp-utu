#include <iostream>
/*include -> palabra reservada del lenguaje C++
Permite llamar archivos, en este caso la libreria estandar de
Entrada y salida de datos iostream para usar cout y cin*/
using namespace std;

/*
    Me permite generar una estructura que pueda guardar
    varios datos en una sala palabra reservada
*/

//Primer paso: declarar la estructura y sus datos
struct nodo {
    int info; // Un tipo de dato entero feliz
    nodo* sig; // Un puntero feliz, es de tipo nodo
};

//Genero un alias de nodo llamado lista
typedef nodo* lista; //Alias para resumir la forma de llamar la lista


void insFront(lista& L, int n);
void mostrar(const nodo* L);
void borrar(lista& L, int n);
void mostrarMenu();

int main() {
    int op = -1;
    lista milista = nullptr;

    while (op) {
        mostrarMenu();
        cin >> op;
        switch (op) {
        case 1:
            int numNuevo;
            cout << "Ingrese el numero para agregar a la lista:\n";
            cin >> numNuevo;
            insFront(milista, numNuevo);
            break;

        case 2:
            cout << "Los numeros cargados en la lista:\n\n";
            mostrar(milista);
            break;

        case 3:
            int n;
            cout << "Ingrese el numero para borrar de la lista:\n";
            cin >> n;
            borrar(milista, n);
            break;
        }
    }
    return 0;
}

void insFront(lista& L, int n) {
    nodo* aux = new nodo; //Declaramos un nodo y le pones de nombre aux
    aux->info = n; // el valor n que recibimos se lo asignamos a nodo
    aux->sig = L; // La lista que recibimos se la asignamos a sig
    L = aux; // Le decimos que aux es la nueva cabeza de la lista
    cout << "Se agrego el " << n << " a la lista\n";
}

void mostrar(const nodo* L) {
    while (L != nullptr) {
        cout << L->info << " - ";
        L = L->sig; //Avance un nodo en la lista (sig hace referencia al puntero)
    }
    cout << "\n";
}

void borrar(lista& L, int n) {
    // Pregunto si la lista es vacia
    if (L == nullptr) {
        return;
    }
    if (L->info == n) {
        nodo* aux = L;
        L = L->sig;
        delete aux;
        return;
    }
    nodo* current = L;
    while (current->sig != nullptr) {
        if (current->sig->info == n) {
            nodo* aux = current->sig;
            current->sig = current->sig->sig;
            delete aux;
            return;
        }
        current = current->sig;
    }
}

void mostrarMenu() {
    cout << "Ejemplo con Listas\n";
    cout << "Seleccione una opcion\n";
    cout << "1. Agregar elemento al frente\n";
    cout << "2. Mostrar lista\n";
    cout << "3. Borrar un elemento\n";
    cout << "0. Salir\n";
}
