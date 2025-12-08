#!/bin/bash
cat /etc/passwd
sleep 10
read -p "¿Desea crear una copia de /etc/passwd en su home? (s/n): " respuesta
if [[ "$respuesta" == "s" || "$respuesta" == "S" ]]; then
    cp /etc/passwd "$HOME/passwd_copia"
    echo "Copia creada en $HOME/passwd_copia"
else
    echo "No se realizó la copia."
fi