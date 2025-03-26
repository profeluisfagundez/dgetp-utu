#!/bin/bash
vimrc="$HOME/.vimrc"

# Verificar si el archivo .vimrc existe
if [[ ! -f "$vimrc" ]]; then
    echo "Creando el archivo .vimrc y añadiendo configuración..."
    echo -e "syntax on\nset tabstop=4\nset number\nset shiftwidth=4\nset autoindent\nset encoding=utf-8" > "$vimrc"
else
    echo "El archivo .vimrc ya existe, añadiendo configuración al final..."
    echo -e "\nsyntax on\nset tabstop=4\nset number\nset shiftwidth=4\nset autoindent\nset encoding=utf-8" >> "$vimrc"
fi
