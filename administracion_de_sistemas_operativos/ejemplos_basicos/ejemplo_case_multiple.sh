#!/bin/bash
# indica la estación del año aproximada según el mes
case $1 in
	diciembre|enero|febrero)
		echo Verano;;
	marzo|abril|mayo)
		echo Otoño;;
	junio|julio|agosto)
		echo Invierno;;
	setiembre|octubre |noviembre)
		echo Primavera;;
	*)
		echo con el nombre del mes en minúscula;;
esac
# fin script
