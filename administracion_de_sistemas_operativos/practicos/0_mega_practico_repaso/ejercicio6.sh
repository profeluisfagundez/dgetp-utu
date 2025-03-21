#!/bin/bash
#if [ $# -ne 5 ]; then
#    echo "Uso: $0 nombre1 nombre2 nombre3 nombre4 nombre5"
#    exit 1
#fi

#USUARIO_ACTUAL=$(whoami)

#for NOMBRE in "$@"; do
#    if [ "$NOMBRE" == "$USUARIO_ACTUAL" ]; then
#        echo "¡Coincidencia! El nombre '$NOMBRE' es el usuario actual."
#        exit 0
#    fi
#done

#echo "Ninguno de los nombres ingresados coincide con el usuario actual ($USUARIO_ACTUAL)."
#exit 1

USUARIO_ACTUAL=$(whoami)
if [ $1 == $USUARIO_ACTUAL ]; then
    echo "¡Coincidencia! El nombre '$1' es el usuario actual."
    exit 0
fi
if [ $2 == $USUARIO_ACTUAL ]; then
    echo "¡Coincidencia! El nombre '$2' es el usuario actual."
    exit 0
fi
if [ $3 == $USUARIO_ACTUAL ]; then
    echo "¡Coincidencia! El nombre '$3' es el usuario actual."
    exit 0
fi  
if [ $4 == $USUARIO_ACTUAL ]; then
    echo "¡Coincidencia! El nombre '$4' es el usuario actual."
    exit 0
fi
if [ $5 == $USUARIO_ACTUAL ]; then
    echo "¡Coincidencia! El nombre '$5' es el usuario actual."
    exit 0
fi
