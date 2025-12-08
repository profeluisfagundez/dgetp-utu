#!/bin/bash

# Verificar si se ha proporcionado un archivo como parámetro
if [[ -z "$1" ]]; then
  echo "Por favor, ingresa el nombre de un archivo como parámetro."
  exit 1
fi

# Definir la ruta al archivo proporcionado por el usuario
archivo="$1"

# Verificar si el archivo existe
if [[ ! -f "$archivo" ]]; then
  echo "El archivo '$archivo' no existe."
  exit 1
fi

# Contar cuántas veces aparece 'if' en el archivo
count=$(grep -o 'if' "$archivo" | wc -l)

# Mostrar el resultado
echo "El archivo '$archivo' contiene $count estructuras 'if'."
