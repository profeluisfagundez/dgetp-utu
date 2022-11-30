#!/bin/bash
echo 'Ejemplo de CASE'
opc=0
while [ $opc -le 5 ]
do
	echo "Ingrese un número del 1 al 5"
	read opc
	case $opc in
		1)
			echo 'Opción 1' 
			;;
		2)
			echo 'Opción 2' 
			;;
		3)
			echo 'Opción 3'
			;;
		4)
			echo 'Opción 4'
			;;
		5)
			echo 'Opción 5 - Salir del programa' ;
			break ;;
		*)
			echo 'Opción incorrecta';;
	esac
       	opc=0	
done
