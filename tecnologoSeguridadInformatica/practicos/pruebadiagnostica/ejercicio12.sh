#!/bin/bash

# Definir el PIN
pin="1234"

# Pedir al usuario que ingrese el PIN
read -p "Ingrese el PIN: " user_pin

# Comparar el PIN ingresado con el correcto
if [ "$user_pin" == "$pin" ]; then
    # Si el PIN es correcto, mostrar el contenido de la home en forma de árbol
    echo "PIN correcto. Mostrando contenido de la home:"
    tree ~
else
    # Si el PIN es incorrecto
    echo "PIN incorrecto. Inténtelo de nuevo."
fi
