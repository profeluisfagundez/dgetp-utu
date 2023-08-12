#!/bin/bash
#Script para hacer consutas a la Base de datos evitando entrar al motor de BD desde el shell

#EJEMPLO SUPER SIMPLE DE BD*****************************
#CREATE DATABASE usuarios;
#USE usuarios;
#CREATE TABLE usuario(
#	ci VARCHAR(8) NOT NULL PRIMARY KEY,
#    nombre VARCHAR(30) NOT NULL,
#    apellido VARCHAR(30) NOT NULL,
#    direccion VARCHAR(50) NOT NULL,
#    email VARCHAR(50) NOT NULL,
#    celular VARCHAR(9) NOT NULL);
#INSERT INTO usuario(ci,nombre,apellido,direccion,email,celular) VALUES('12223334','Foo','Bar','foo 4563 esq bar','foo@bar','099099099');
#SELECT * FROM usuarios.usuario;
#*******************************************************

#Variables globales*********************************************************
opc=0
bd=usuarios
tabla_uno=usuario
#la contraseña del root no se guarda en el script por un tema de seguridad
#***************************************************************************

#Funciones**************************************************************
menu(){
	clear
	echo "MENÚ"
	echo "1 - Consultar todos los datos de la tabla usuario"
	echo "2 - Consultar las CI y los nombres de la tabla usuario"
	echo "3 - Cobsultar los nombres y e-mails de la tabla usuarios"
	echo "4 - Realizar una consulta personalizada"
	echo "5 - Salir"
}

realizar_consulta(){
	clear
	echo "Ingrese la contraseña del root para ver las tablas de la BD"
	echo "show tables from $bd" | mysql -u root -p
	read -p "ingrese el nombre de la tabla: " tabla
	echo "select * from $bd.$tabla" | mysql -u root -p
}

#***********************************************************************

#MAIN**************************************************************************
while [ $opc -ne 5 ]
do
	menu
	read -p "Seleccione una opción: " opc
	case $opc in
		1) echo "select * from $bd.$tabla_uno" | mysql -u root -p ; read a ;;
		2) echo "select ci,nombre from $bd.$tabla_uno" | mysql -u root -p ; read a ;;
		3) echo "select nombre,email from $bd.$tabla_uno" | mysql -u root -p ; read a ;;
		4) realizar_consulta ; read a ;;
		5) echo "Hasta luego"; break ;;
		*) echo "Opción incorrecta" ; read a ;;
	esac
done
