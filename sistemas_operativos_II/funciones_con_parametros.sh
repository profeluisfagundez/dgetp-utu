#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 10/01/2017
#LICENCIA: GPL3

function suma(){
	local a=$1
	local b=$2
	echo $(($a + $b))
}

function resta(){
	local a=$1
	local b=$2
	echo $(( $a - $b ))
}

echo "La suma de 2 + 7 es: "
suma 2 7
sleep 1
echo "La resta de 2014 - 1024 es: "
resta 2014 1024
