#!/bin/bash

# Obtener el nombre del usuario actual
usuario_actual=$(whoami)

# Verificar si el archivo /etc/sudoers existe
if [[ ! -f "/etc/sudoers" ]]; then
  echo "El archivo /etc/sudoers no existe."
  exit 1
fi

# Verificar si el usuario está dentro del archivo /etc/sudoers
if grep -q "$usuario_actual" /etc/sudoers; then
  echo "El usuario '$usuario_actual' está en el archivo sudoers."
else
  echo "El usuario '$usuario_actual' NO está en el archivo sudoers."
fi
