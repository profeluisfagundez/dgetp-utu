#!/bin/bash
#VARIABLES********
opc=10
year=$(date +%Y-%m-%d)
#*****************

#FUNCIONES**********************************************************************************************************
function menu(){
	clear
	echo "MENÚ DE GESTIÓN DE USUARIOS"
	echo "1 - Agregar usuario"
	echo "2 - Borrar usuario"
	echo "3 - Listar usuarios del sistema"
	echo "4 - Buscar un usuario en el sistema"
	echo "5 - Cambiar contraseña de un usuario"
	echo "6 - Bloquear usuario"
	echo "7 - Desbloquear usuario"
	echo "0 - Salir"
}

function agregar_usuario(){
	clear
	echo "Ingrese el apellido y nombre del usuario en formato: apellidonombre: "
	read nombre
	usuario=$(echo $nombre | tr [:upper:] [:lower:])
	nomb=$(cat /etc/passwd | grep -c $usuario)
	if [ $nomb -eq 1 ]; then
		echo "El usuario ya existe"
		read pausa
	else
		echo "Ingrese el grupo: "
		read grupo
		user_group=$(echo $grupo | tr [:upper:] [:lower:])
		grup=$(cat /etc/group | grep -c $user_group)
		if [ $grup -eq 1 ]; then
			useradd -g $user_group -c "$user_group $year" -d /home/$usuario -m -s /bin/bash $usuario
			passwd -e -d $usuario
			echo "usuario dado de alta"
			read pausa
		else
			echo "El grupo no existe"
			read pausa
		fi
	fi
}

function borrar_usuario(){
	clear
    echo "Acá vamos a borrar un usuario"
    read usuario
}

function listar_usuarios(){
    echo "USUARIOS DEL SISTEMA"
    cut -d ":" -f 1 /etc/passwd | sort | more
    echo "Presione enter para volver al menú principal"
    read pausa
}

function buscar_usuario(){ 
	clear
    echo "Acá vamos a buscar un usuario"
	fi
}

function cambiar_contra_usuario(){ 
	clear
    echo "Acá vamos a cambiar la contraseña de un usuario"
}

function bloquear_usuario(){
	clear
	echo "Acá vamos a bloquear la cuenta de un usuario"
}

function desbloquear_usuario(){
	clear
	echo "Acá vamos a desbloquear la cuenta de un usuario"
}	

while [ $opc -ne 0 ]
do
	clear
	menu
	read -p "Ingrese la opción correspondiente: " opc
	case $opc in
	1)
		agregar_usuario;;
	2)
		borrar_usuario;;
	3)
		listar_usuarios;;
	4)
		buscar_usuario;;
	5)
		cambiar_contra_usuario;;
	6)
		bloquear_usuario;;
	7)
		desbloquear_usuario;;
	0)
		echo "Volviendo al menú principal"; break ;; 
	*)
		echo "Seleccionó una opción incorrecta";;
	esac
done
#********************************************************************************************************************