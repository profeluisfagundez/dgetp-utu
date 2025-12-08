#!/bin/bash
# Programador: Luis E. Fagúndez
# Fecha: 16/03/2022
# Proposito: ejemplo de uso de mkdir 
# Descripción: En este ejemplo se crea un directorio llamado scriptsSistema y dentro de el una serie de sub directorios.
echo "Vamos a crear unos directorios"
# El comando siguiente crea un directorio vació
mkdir scriptsSistema
# El siguiente comando crea un directorio y dos sub directorios adentro de el
mkdir -p scriptsSistema/{scriptsInicio,ScriptsFin}/
# Es importante acordarse que para remover directorios podemos usar el comando rm -rf
rm -rf scriptsSistema
# NOTA: siempre tratemos de usar rutas absolutas para indicar donde crear los directorios
mkdir -p ~/scriptsSistema/{scriptsInicio,ScriptsFin}/directorios/{directorioUno,directorioDos}/
# Volvemos a remover scriptsSistema
rm -rf scriptsSistema