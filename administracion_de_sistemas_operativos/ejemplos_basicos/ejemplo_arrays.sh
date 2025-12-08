#!/bin/bash
clear
#Declaramos el array que vamos a trabajar
array_nombres=("Luis" "Eduardo" "José" "Martín" "Lucía" "Ana" "Rodrigo")
echo "Mostramos el valor de este array de números"
echo "************************************************"
for elemento in "${array_nombres[@]}"
do
	echo $elemento
done
echo "************************************************"
echo "Mostramos los indices del array de números"
echo "***********************************"
for elemento in "${!array_nombres[@]}"
do
	echo $elemento
done
echo "************************************************"

