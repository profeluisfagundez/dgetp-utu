#!/bin/bash

echo "Ingrese un número:"
read numero
clear

# Comparar el número ingresado
if [ "$numero" -lt 12 ]; then
    echo "Ingresó un número menor a 12, vuelva a intentarlo."
elif [ "$numero" -gt 12 ]; then
    echo "El número ingresado es mayor a 12."
else
    echo "El número ingresado es exactamente 12."
fi


usuario=$(whoami)
hora_actual=$(date "+%Y-%m-%d %H:%M:%S")
echo "Valor ingresado: $numero"
echo "Nombre de usuario: $usuario"
echo "Hora actual: $hora_actual"
