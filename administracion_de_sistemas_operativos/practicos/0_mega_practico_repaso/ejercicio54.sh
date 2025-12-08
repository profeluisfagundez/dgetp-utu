#!/bin/bash

# Verificar si el archivo fue proporcionado como argumento
if [ $# -eq 0 ]; then
    echo "Debe proporcionar el nombre del archivo como argumento."
    exit 1
fi

# Verificar si el archivo existe
archivo="$1"
if [ ! -f "$archivo" ]; then
    echo "El archivo '$archivo' no existe."
    exit 1
fi

# Ordenar los números en el archivo de menor a mayor y mostrarlos
sort -n "$archivo"
