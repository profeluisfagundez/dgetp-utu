#!/bin/bash

# Verificar si se proporcionó un archivo como parámetro
if [[ -z "$1" ]]; then
  echo "Por favor, ingrese el nombre del archivo como parámetro."
  exit 1
fi

archivo="$1"

# Verificar si el archivo existe
if [[ ! -f "$archivo" ]]; then
  echo "El archivo '$archivo' no existe."
  exit 1
fi

# Mostrar las líneas que no son comentarios (no comienzan con '#')
echo "Líneas que no son comentarios:"
grep -v '^#' "$archivo"
