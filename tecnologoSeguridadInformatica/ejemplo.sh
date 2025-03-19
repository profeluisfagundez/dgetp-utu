#!/bin/bash
read -p "Ingrese el usuario del sistema" usuarioIngresado
usuario=/home/$usuarioIngresado
if [ -d $usuario ]; then
    mkdir -p /home/$USER/Documentos/seguridadInformatica
    echo "Se ha creado el directorio"
else
    echo "Ingrese un usuario valido"
fi
w
# chmod +x ejemplo.sh para dar permisos
# ./ejemplo.sh para ejecutar
# setxkbmap es