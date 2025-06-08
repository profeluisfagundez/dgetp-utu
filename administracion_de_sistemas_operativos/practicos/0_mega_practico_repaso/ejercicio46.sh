#!/bin/bash

# Solicitar al usuario el nombre del archivo
read -p "Ingrese el nombre del archivo: " archivo

# Verificar si el archivo existe
if [[ ! -f "$archivo" ]]; then
  echo "El archivo no existe."
  exit 1
fi

# Mostrar las líneas que comienzan con la letra "a"
echo "Líneas que comienzan con la letra 'a':"
grep '^a' "$archivo"
