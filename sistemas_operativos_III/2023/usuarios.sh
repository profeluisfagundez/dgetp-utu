#!/bin/bash
#Script de usuarios
#*************VARIABLES GLOBALES*****************************************************************
opc=0
#************************************************************************************************

#**************FUNCIONES*************************************************************************
function menu(){
	echo "MENU"
	echo "1 - Agregar usuario"
	echo "2 - Listar usuarios"
	echo "3 - Buscar usuarios"
	echo "4 - Borrar usuarios"
	echo "5 - Bloquear usuario"
	echo "6 - Desbloquear usuario"
	echo "7 - Cambiar contraseña"
	echo "8 - Volver"
	echo "Ingrese una opcion: "
}

function altaUsuario(){
	clear
	#Nomeclatura del usuario apellidonombre
	echo "Ingrese el apellido y nombre del usuario en formato: apellidonombre: "
	read nombre
	usuario=$(echo $nombre | tr [:upper:] [:lower:])
	nomb=$(cat /etc/passwd | grep -c $usuario)
	if [ $nomb -eq 1 ]; then
		echo "El usuario ya existe, presione enter para continuar"
		read pausa
	else
		echo "Ingrese el grupo: "
		read grupo
		user_group=$(echo $grupo | tr [:upper:] [:lower:])
		grup=$(cat /etc/group | grep -c $user_group)
		if [ $grup -eq 1 ]; then
			useradd -g $user_group -c "$user_group $year" -mk /etc/skel -s /bin/bash $usuario
			passwd -e -d $usuario
			echo "usuario dado de alta, presione enter para continuar"
			read pausa
		else
			echo "El grupo no existe"
			read pausa
		fi
	fi
}

function listarUsuario(){
	#Función que lista los usuarios en el sistema y devuelve su información
	cut -d ":" -f1 /etc/passwd
	echo "Presione enter para continuar"
	read pause
}

function buscarUsuario(){
	#Función que busca un usuario en el sistema y devuelve su información
	clear
	#Nomeclatura del usuario apellidonombre
	echo "Ingrese el apellido y nombre del usuario en formato: apellidonombre: "
	read nombre
	usuario=$(echo $nombre | tr [:upper:] [:lower:])
	nomb=$(cat /etc/passwd | grep -c $usuario)
	if [ $nomb -eq 1 ]; then
		cat /etc/passwd | grep $usuario
		echo "presione enter para continuar"
		read pausa
	else
		echo "El usuario no existe, presione enter para continuar"
		read pausa
	fi
}

#************************************************************************************************

#***************MAIN*****************************************************************************
while [ $opc -ne 8 ];
do
    menu
    read -p "Ingrese una opción: " opc
    case $opc in
    1)
		echo "OPCIÓN 1 - ALTA DE USUARIOS" ;
		altaUsuario;;
    2) echo "OPCIÓN 2 - " ;;
    3) echo "OPCIÓN 3 - " ;;
    4) echo "OPCIÓN 4 - " ;;
    5) echo "OPCIÓN 5 - " ;;
    6) echo "OPCIÓN 6 - " ;;
    7) echo "OPCIÓN 7 - " ;;
    8) echo "OPCIÓN 8 - Hasta luego " ; break ;;
    *) echo "OPCIÓN POR DEFECTO - " ;;
    esac
done
#************************************************************************************************
