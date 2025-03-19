#!/bin/bash
# shebang 
read -p "Ingrese el usuario del sistema" usuario
if [ -d $usuario ]; then
    mkdir -p /home/$USER/Documentos/seguridadInformatica
    echo "Se ha creado el directorio"
else
    echo "Ingrese un usuario valido"
fi