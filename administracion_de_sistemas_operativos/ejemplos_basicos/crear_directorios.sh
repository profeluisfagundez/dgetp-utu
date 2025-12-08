#!/bin/bash
#PROGRAMADOR: Luis Eduardo Fagúndez
#FECHA DE ÚLTIMA MODIFICACIÓN: 27/08/2016
#LICENCIA: GPL3
#Example for creating directories with IF statement  
clear
if [ -d INET ];
then
	echo -e "The directory INET was found, do you wish to remove the directory? S/N"
	read answer
	if [ $answer = "S" ];
	then
		rm -r /$HOME/INET
		echo "The directory INET was remove"
	else
		echo "The operation was cancelled"
	fi
else
	echo -e "The directorty INET was not found, do you wish to create the directory? S/N"
	read answer
	if [ $answer = "S" ];
	then
		mkdir -p /$HOME/INET/{ProgramingIII,SoftwareEngineering,ComputerNetwork}/{Compulsory,Excercise,Theorists}
		echo "The directory INET was created"
	else
		echo "The operation was cancelled"
	fi
fi

