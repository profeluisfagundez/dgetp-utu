#! /bin/bash
clear
read -n 1 -p "Pulsa una tecla" tecla
case $tecla in
	[a-z,A-Z]) echo -e "\nHa introducido una letra" ;;
	[0-9]) echo -e "\nHa introducido un numero" ;;
	*) echo -e "\nHa introducido un caracter especial" ;;
esac
