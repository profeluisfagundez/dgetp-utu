#!/bin/bash

# Solicitar el nombre del archivo al usuario
read -p "Ingrese el nombre del archivo: " archivo
read -p "Ingrese la palabra clave a buscar: " palabra

# Verificar si el archivo existe
if [[ ! -f "$archivo" ]]; then
  echo "El archivo no existe."
  exit 1
fi

# 1. Buscar la palabra clave usando grep y mostrar las coincidencias
echo "1. Coincidencias de la palabra clave en el archivo:"
grep -n "$palabra" "$archivo"

# 2. Buscar cuántas veces se repite la palabra clave y mostrar las coincidencias
echo "2. Número de veces que se repite la palabra clave:"
grep -o "$palabra" "$archivo" | wc -l

# 3. Buscar todas las líneas que no contienen la palabra clave y mostrarlas en pantalla
echo "3. Líneas que no contienen la palabra clave:"
grep -v "$palabra" "$archivo"

# 4. Buscar en qué líneas se encuentra la palabra clave y mostrarlas
echo "4. Líneas donde se encuentra la palabra clave:"
grep -n "$palabra" "$archivo" | cut -d: -f1
