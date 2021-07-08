#!/bin/bash
# diasemana.sh: nombres de los días de la semana
case $1 in
1)   echo Domingo;;
2)   echo Lunes;;
3)   echo Martes;;
4)   echo Miércoles;;
5)   echo Jueves;;
6)   echo Viernes;;
7)   echo Sábado;;
*)   echo Debe indicar un número del 1 al 6;;
esac
