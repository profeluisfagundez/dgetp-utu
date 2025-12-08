#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 24/10/2016
#LICENCIA: GPL3
echo "**********************************"
echo "*SCRIPT creado por Luis Fagúndez**"
echo "*Empezando la instalación de Java*"
echo "*Se actualizara el sistea primero*"
echo "**********************************"
echo
sudo apt-get update && sudo apt-get upgrade
echo
echo "Actualizacion finalizada, presione una tecla para continuar"
read a
echo "Si tiene java ya instalado vera la versión automaticamente: "
echo
java -version
echo
read b
echo "Comenzando actulizacion de jre"
echo
sudo apt-get install default-jre
echo
echo "La instalación de jre a finalizado, presione una tecla para instalar jdk"
echo
read c
sudo apt-get install default-jdk
echo "La instalacion a finalizado, presione una tecla para salir"
read d
