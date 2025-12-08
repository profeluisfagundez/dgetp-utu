#!/bin/bash

# Solicitar al usuario que ingrese un número
echo "Ingresa un número: "
read numero

# Usar un bucle for para contar desde 1 hasta el número ingresado
for ((i=1; i<=numero; i++))
do
  # Imprimir el número actual en el contador
  echo -n "$i "
done

# Salto de línea al final
echo
