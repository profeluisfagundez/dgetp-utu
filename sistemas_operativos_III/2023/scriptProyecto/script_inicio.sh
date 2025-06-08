#!/bin/bash
opc=0

function menu() {
    clear
    echo "MENÚ DE GESTIÓN PARA EL SYSADMIN"
    echo "1 - Menú para gestión de usuarios"
    echo "2 - Menú para gestión de grupos"
    echo "3 - Salir"
}

while [ $opc -ne 3 ]
    do
        menu
        echo "Ingrese una opción: "
        read opc
        case $opc in
            1) bash script_usuarios.sh ;;
            2) bash script_grupos.sh ;;
            3) echo "Adios" ; break ;;
            *) echo "Opción no valida" ; read pausa ;;
        esac
    done