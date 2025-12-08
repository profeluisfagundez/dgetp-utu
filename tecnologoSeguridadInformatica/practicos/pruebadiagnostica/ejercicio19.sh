#!/bin/bash
echo "Por favor, ingrese un número para ver su tabla de multiplicar:"
read numero

# Mostrar la tabla de multiplicar
echo "Tabla de multiplicar de $numero:"
for ((i=1; i<=10; i++))
do
  resultado=$((numero * i))
  echo "$numero x $i = $resultado"
done