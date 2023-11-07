#!/bin/bash

# Definir la palabra que deseas buscar
palabra_a_buscar="tu_palabra_aqui"

# Ruta de la carpeta que quieres recorrer
carpeta="/ruta/de/la/carpeta"

# Recorre la carpeta y busca la palabra en los archivos de texto
for archivo in "$carpeta"/*.txt; do
    if [ -f "$archivo" ]; then
        if grep -q "$palabra_a_buscar" "$archivo"; then
            echo "La palabra '$palabra_a_buscar' se encontró en '$archivo'."
        else
            echo "La palabra '$palabra_a_buscar' no se encontró en '$archivo'."
        fi
    fi
done