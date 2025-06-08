#!/bin/bash

echo "Ingresa un número: "
read numero

if [ "$numero" -ge 10 ]; then
  echo "El número ingresado es mayor o igual a 10. El programa se detendrá."
  exit 1
fi

for ((i=1; i<=numero; i++))
do
  echo -n "$i "
done

echo
