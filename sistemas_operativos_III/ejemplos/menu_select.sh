#!/bin/bash
#Script que permite trabajar con los usuarios del sistema operativo
PS3="Introduce una opcion: "
 
#Funciones a desarrollar para éste script

#Función que crea usuarios en el sistema operativo 
#Es importante chequear que el usuario no exista previamente antes de crearlo
function crear_usuario(){
	echo ""
}

#Función que cambia el nombre de un usuario en el sistema operativo 
#Es importante chequear que el nuevo nombre de usuario no exista previamente antes de cambiarlo
function cambiar_nombre_usuario(){
	echo ""
}

#Función que cambia el nombre de la home de un usuario en el sistema operativo 
#Es importante chequear que el nombre de la home de un usuario no exista previamente antes de cambiarlo
function cambiar_home_usuario(){
	echo ""
}

#Función que permite dar de baja un usuario en el sistema operativo 
#Es importante chequear si se quiere hacer una baja lógica o física en el sistema
function dar_de_baja_usuario(){
	echo ""
}

#Función que permite bloquear un usuario en el sistema operativo 
#Es importante chequear que el usuario exista previamente 
function bloquear_usuario(){
	echo ""
}

#Función que permite desbloquear un usuario en el sistema operativo 
#Es importante chequear que el usuario exista previamente 
function desbloquear_usuario(){
	echo ""
}

#Función que permite buscar un usuario en el sistema operativo 
#Es importante chequear que el usuario existe previamente antes de buscarlo
function buscar_usuario(){
	echo ""
}

#Función que permite cambiar la contraseña de un usuario en el sistema operativo 
#Es importante chequear que el usuario exista previamente antes de cambiar la contraseña
function cambiar_contra_usuario(){
	echo ""
}
 
#Main del software 
select opc in "Crear usuario" "Cambiar nombre de usuario" "Cambiar la home de un usuario" "Dar de baja un usuario" "Bloquear usuario" "Desbloquear usuario" "Buscar un usuario" "Cambiar la contraseña de un usuario" "Salir del sistema" 
do
	case $opc in
		"Crear usuario") echo "Opción Crear Usuarios" ;;
		"Cambiar nombre de usuario") echo "Opción Cambiar el nombre de un usuario" ;;
		"Cambiar la home de un usuario") echo "Opción Cambiar la home de un usuario" ;;
		"Dar de baja un usuario") echo "Opción Dar de baja un usuario" ;;
		"Bloquear usuario") echo " Opción Bloquear usuario" ;;
		"Desbloquear usuario")  echo " Opción Desbloquear usuario" ;;
		"Buscar un usuario") echo "Opción Buscar un usuario" ;;
		"Cambiar la contraseña de un usuario") echo "Opción Cambiar la contraseña de un usuario" ;;
		"Salir del sistema") echo "Opción Salir del sistema"; break ;;
		*) echo "No has introducido un valor correcto" ;;
	esac
done
