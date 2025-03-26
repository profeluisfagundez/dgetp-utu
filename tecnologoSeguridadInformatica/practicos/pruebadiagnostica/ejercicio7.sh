#!/bin/bash

if [ $# -ne 4 ]; then
    echo "Debe de agregar 3 parámetros posicionales"
    exit 1
fi

for NOMBRE in "$@"; do
    NOMBRE_MINUSCULA=$(echo "$NOMBRE" | tr '[:upper:]' '[:lower:]')    
    echo "$NOMBRE_MINUSCULA"
    sleep 2
done
