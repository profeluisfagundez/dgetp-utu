#!/bin/bash

read -p "Ingresa el nombre del usuario: " nombre_usuario
read -p "Ingresa el nombre del grupo: " grupo

nombre_usuario=$(echo "$nombre_usuario" | tr '[:upper:]' '[:lower:]')

if grep -q "^$nombre_usuario:" /etc/passwd; then
    echo "Error: El usuario '$nombre_usuario' ya existe."
    exit 1
fi

if ! grep -q "^$grupo:" /etc/group; then
    echo "Error: El grupo '$grupo' no existe."
    exit 1
fi

# Si todo está correcto, agregar el usuario
sudo useradd -m -G "$grupo" "$nombre_usuario"

# Confirmar que el usuario ha sido creado
if [ $? -eq 0 ]; then
    echo "El usuario '$nombre_usuario' ha sido creado y agregado al grupo '$grupo'."
else
    echo "Error al agregar el usuario '$nombre_usuario'."
    exit 1
fi
