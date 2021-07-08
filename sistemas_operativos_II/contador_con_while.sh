
#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 26/11/2016
#LICENCIA: GPL3
echo "Ingrese el tamaño de el contador menor a 20: "
read contador
if [ $contador -gt 20 ];
then
	echo -e "El contador ingresado es mayor a 20 \n"
	sleep 5
else
	while [ $contador -lt 20 ];
	do
		echo -e  "$contador\n"
		let contador=contador+1
	done
fi
