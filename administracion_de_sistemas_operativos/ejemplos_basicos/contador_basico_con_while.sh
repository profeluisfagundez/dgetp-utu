#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 24/10/2016
#LICENCIA: GPL3
#script para manejar contadores usando while
clear
contador=0
echo -e "Ingrese el tamaño del contador\n" 
read contador
clear
if [ $contador -gt 10 ];
then
        echo -e "Ingreso un número mayor a 10\n"
        sleep 5
else
        while [ $contador -lt 10 ]
        do
                echo -e "Contador : $contador\n"
                contador=$(($contador + 1))
        done
        sleep 5
fi
