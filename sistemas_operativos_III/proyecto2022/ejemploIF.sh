#!/bin/bash
echo "Vamos a trabajar con la estructura IF"
read -p "Ingrese un número del 1 al 10, sin hacer trampas :P " numero
if [ $numero -le 10 ]
then
    echo "Veo que te gusta seguir las reglas"
else
    echo "Ingresaste un número mayor a 10 :c"
fi
# Soy un comentario, no te olvides de cerrar la esctructura if SIEMPRE
sleep 3
echo "vamos a trabajar con caracteres :O"
read -p "Ingresa una letra A, B o C: " letra
if [ $letra == 'A' -o $letra == 'B' -o $letra == 'C' ]
then
    echo "gracias por ingresar la letra: " $letra
else
    echo "ouch! letra incorrecta :P"
fi

