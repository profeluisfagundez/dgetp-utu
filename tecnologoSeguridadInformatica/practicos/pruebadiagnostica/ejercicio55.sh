#!/bin/bash

# Pedir al usuario que ingrese un número
echo "Por favor, ingrese un número:"
read numero

# Verificar si el número ingresado es mayor a 50
if [ "$numero" -gt 50 ]; then
    echo "El número ingresado es mayor a 50. Por favor, ingrese un número menor."
    exit 1
fi

# Contar desde el número ingresado hasta 50
for ((i=$numero; i<=50; i++)); do
    echo $i
done
