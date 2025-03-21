#!/bin/bash

if [ $# -ne 4 ]; then
    echo "Uso: $0 nombre1 nombre2 nombre3 nombre4"
    exit 1
fi

for NOMBRE in "$@"; do
    NOMBRE_MINUSCULA=$(echo "$NOMBRE" | tr '[:upper:]' '[:lower:]')    
    echo "$NOMBRE_MINUSCULA"
    sleep 2
done
