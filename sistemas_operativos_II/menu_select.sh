#! /bin/bash
clear
PS3="Introduce una opción: "
select opcion in "1" "2" "3" "4"; do
case $opcion in
	1) echo "Opcion 1" ;;
	2) echo "Opcion 2" ;;
	3) echo "Opcion 3" ;;
	4) echo "Adios"; break ;;
	*) echo "No has introducido un valor correcto" ;;
esac
done
