#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 10/01/2017
#LICENCIA: GPL3

function multi_por_dos(){
	local a=$1
	local b=2
	return $(( $a * $b ))
}

#llamamos a la función
multi_por_dos 15
retorno=$?
echo "El valor de la multiplicación es: " $retorno
