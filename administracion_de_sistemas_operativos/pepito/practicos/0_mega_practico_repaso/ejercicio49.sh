#!/bin/bash

# Definir la ruta al archivo .bashrc
archivo="$HOME/.bashrc"

# Verificar si el archivo .bashrc existe
if [[ ! -f "$archivo" ]]; then
  echo "El archivo .bashrc no existe."
  exit 1
fi

# Contar cuántas veces aparece 'if' en el archivo .bashrc
count=$(grep -o 'if' "$archivo" | wc -l)

# Mostrar el resultado
echo "El archivo .bashrc contiene $count estructuras 'if'."
