#!/bin/bash

mostrar_tabla() {
  local numero=$1
  echo "Tabla de multiplicar de $numero:"
  for ((i=1; i<=10; i++))
  do
    resultado=$((numero * i))
    echo "$numero x $i = $resultado"
  done
}

# Mostrar el menú
echo "Elija un número para ver su tabla de multiplicar (1-9):"
echo "1. Tabla del 1"
echo "2. Tabla del 2"
echo "3. Tabla del 3"
echo "4. Tabla del 4"
echo "5. Tabla del 5"
echo "6. Tabla del 6"
echo "7. Tabla del 7"
echo "8. Tabla del 8"
echo "9. Tabla del 9"
echo "0. Salir"

# Leer la opción del usuario
read -p "Ingrese una opción: " opcion

# Validar la opción ingresada
if [[ ! "$opcion" =~ ^[0-9]$ ]] || [[ "$opcion" -lt 0 ]] || [[ "$opcion" -gt 9 ]]; then
  echo "Opción inválida. Por favor ingrese un número entre 1 y 9, o 0 para salir."
  exit 1
fi

# Ejecutar la opción elegida
case $opcion in
  1) mostrar_tabla 1 ;;
  2) mostrar_tabla 2 ;;
  3) mostrar_tabla 3 ;;
  4) mostrar_tabla 4 ;;
  5) mostrar_tabla 5 ;;
  6) mostrar_tabla 6 ;;
  7) mostrar_tabla 7 ;;
  8) mostrar_tabla 8 ;;
  9) mostrar_tabla 9 ;;
  0) echo "Saliendo..."; exit 0 ;;
  *)
    echo "Opción no válida. Saliendo..."
    exit 1
    ;;
esac
