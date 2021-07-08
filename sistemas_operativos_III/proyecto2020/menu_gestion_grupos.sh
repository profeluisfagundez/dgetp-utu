#!/bin/bash
opc=0

#Funciones****************************
function menu_grupos(){
  clear
  echo "MENÚ DE GESTIÓN DE GRUPOS"
  echo "1 - Agregar grupo"
  echo "2 - Eliminar grupo"
  echo "3 - Listar grupos del sistema"
  echo "4 - Buscar un grupo"
  echo "5 - Salir"
  
}

while [ $opc -ne 5 ]
    do
        menu_grupos
        echo "Ingrese una opción: "
        read opc
        case $opc in
            1) echo "hola 1" ; read a ;;
            2) echo "hola 2" ; read a ;;
            3) echo "hola 3" ; read a ;;
            4) echo "hola 4" ; read a ;;
            5) echo "Adios" ; break ;;
            *) echo "Opción no valida" ; read pausa ;;
        esac
    done