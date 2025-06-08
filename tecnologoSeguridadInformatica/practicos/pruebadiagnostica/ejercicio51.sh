#!/bin/bash

# Ruta del archivo a verificar
archivo="/etc/passwd"

# Verificar si el archivo existe
if [[ -f "$archivo" ]]; then
  # Obtener el nombre de usuario actual
  usuario=$(whoami)

  # Contar cuántas veces aparece el nombre de usuario en el archivo
  count=$(grep -c "^$usuario" "$archivo")

  # Mostrar el resultado
  echo "El nombre de usuario '$usuario' aparece $count vez/veces en el archivo '$archivo'."
else
  # Si el archivo no existe, mostrar un mensaje de error
  echo "El archivo '$archivo' no se encuentra en el sistema."
fi
