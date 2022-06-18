#!/bin/bash
#variables globales******
opc=0
#************************

function menu(){
	echo "MENU"
	echo "1 - Agregar usuario"
	echo "2 - Listar usuarios"
	echo "3 - Buscar usuarios"
	echo "4 - Borrar usuarios"
	echo "5 - Bloquear usuario"
	echo "6 - Desbloquear usuario"
	echo "7 - Cambiar contraseÃ±a"
	echo "8 - Volver"
	echo "Ingrese una opcion: "
}

function altaUsuarios(){
	clear
	echo "Ingrese el nombre de usuario: "
	read nombre
	existeUsuario=$(cat /etc/passwd | grep -c $nombre)
	if [ $existeUsuario -eq 1 ]; then
		echo "El usuario existe, presione enter para continuar"
		read a
	else
		echo "Ingrese el nombre del grupo"
		read grupo
		existeGrupo=$(cat /etc/group | grep -c $grupo)
		if [ $existeGrupo -eq 1 ]; then
			echo "Ingrese el comentario del usuario: "
			read comentario
			useradd -g $grupo -d /home/$nombre -m -c $comentario -s /bin/bash $nombre
			passwd -e -d $nombre
		else
			echo "El grupo no existe, no se puede agregar el usuario"
			echo "Presione enter para continuar"
			read a
		fi
	fi
}

function listarUsuarios(){
	echo "LISTA DE USUARIOS"
	cut -d ":" -f 1 /etc/passwd
}

function buscarUsuarios(){
	clear
	echo "Ingrese el nombre de usuario: "
	read nombre
	existeUsuario=$(cat /etc/passwd | grep -c $nombre)
	if [ $existeUsuario -eq 1 ]; then
		echo "El usuario existe"
		nomb=$(cut -d ":" -f 1 /etc/passwd | grep $nombre)
		coment=$(cut -d ":" -f 5 /etc/passwd | grep $nombre)
		homeTrabajo=$(cut -d ":" -f 6 /etc/passwd | grep $nombre)
		echo "NOMBRE: " $nomb
		echo "COMENTARIO: " $coment
		echo "HOME DE TRABAJO: " $homeTrabajo
		read a
	else
		echo "El usuario no existe en el sistema"
		echo "Presione enter para continuar"
		read a
	fi
}

function cambiarContra(){
	clear
	echo "Ingrese el nombre de usuario: "
	read nombre
	existeUsuario=$(cat /etc/passwd | grep -c $nombre)
	if [ $existeUsuario -eq 1 ]; then
		passwd $nombre
	else
		echo "El usuario no existe, presione enter para continuar"
		read a
	fi
}

while [ $opc -ne 8 ];
do
	menu
	read opc
	case $opc in
		1)
			echo "AGREGAR USUARIO";
			altaUsuarios;;
		2)
			echo "LISTA DE USUARIOS";
			listarUsuarios;;
		3)
			echo "BUSCAR USUARIOS";
			buscarUsuarios;;
		7)
			echo "CAMBIAR CONTRASEÃ‘A";
			cambiarContra;;
		8)
			echo "Hasta pronto"; break ;;
		*)
			echo "Ingreso una opciÃ³n incorrecta";;
	esac
done
