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
            1) echo "1 - Agregar grupo" ; read a ;;
            2) echo "2 - Eliminar grupo" ; read a ;;
            3) echo "3 - Listar grupos del sistema" ; read a ;;
            4) echo "4 - Buscar un grupo en el sistema" ; read a ;;
            5) echo "5 - Volver" ; break ;;
            *) echo "Opción no valida" ; read pausa ;;
        esac
    done