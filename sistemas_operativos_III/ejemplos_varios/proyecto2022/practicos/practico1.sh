#Paso previo
mkdir ~/MisScripts/

#EJERCICIO 1
#!/bin/bash
mkdir -p ~/practico4/Ejemplos/{Por_Resolver,ReSuElTos}/
mkdir -p ~/practico4/Teoricos/Manuales/{Leidos,PorLeer}/

#Ejercicio 2
#!/bin/bash
clear
cal 06 2022
clear

#Ejercicio 3
#!/bin/bash
cat /etc/passwd
sleep 10
clear

#ejercicio 4
#!/bin/bash
rmdir -p ~/practico4/Ejemplos/{Por_Resolver,ReSuElTos}/ & rmdir -p ~/practico4/Teoricos/Manuales/{Leidos,PorLeer}/

#ejercicio 5
#!/bin/bash
chmod 755 ~/MisScripts/*.sh

#ejercicio6
#!/bin/bash
echo "Hola: " $1 "Hola: " $2 " Hola: " $3 

#ejercicio 7
#!/bin/bash
echo "Hola: " $1
sleep 2
echo "Hola: " $2
sleep 2
echo "Hola: " $3 
sleep 2
echo "Hola: " $4
sleep 2

#ejercicio 8
#!/bin/bash

#Ejercicio 9
#!/bin/bash
mkdir ~/MisScripts/copia/
cp ~/MisScripts/ ~/MisScripts/copia/
cat *.sh

#ejercicio 10
#!/bin/bash
cp /etc/passwd ~/MisScripts/copia/
cp /etc/hosts ~/MisScripts/copia/
chmod 740 ~/MisScripts/copia/passwd
chmod 740 ~/MisScripts/copia/hosts