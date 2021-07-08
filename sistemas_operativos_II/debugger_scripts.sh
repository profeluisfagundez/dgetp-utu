#!/bin/bash -x
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 13/11/2017
#LICENCIA: GPL3
#script para aprender a usar el debugger de Bash, se llama con el modificar -x al final de la orden shebang.
#Al final de la ejecución del script se cerrara la shell que ejecuto el programa.
clear
contador=5
clear
while [ $contador -lt 10 ]
do
        echo -e "Contador : $contador\n"
        contador=$[ $contador + 1 ]
		echo -e "\n"
		sleep 1
done
sleep 5
kill -9 $PPID
