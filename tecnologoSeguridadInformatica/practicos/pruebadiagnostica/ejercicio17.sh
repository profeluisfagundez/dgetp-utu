#!/bin/bash

# Verificar si se ha ingresado un parámetro
if [ -z "$1" ]; then
  echo "Por favor, ingresa un número como parámetro."
  exit 1
fi

numero=$1

if [ "$numero" -gt 50 ]; then
  echo "Error: El número ingresado es mayor a 50."
  exit 1
fi

echo "Lista de números desde $numero hasta 50:" > lista.txt
for ((i=numero; i<=50; i++))
do
  echo $i >> lista.txt
done

echo "La lista se ha guardado en el archivo lista.txt."
