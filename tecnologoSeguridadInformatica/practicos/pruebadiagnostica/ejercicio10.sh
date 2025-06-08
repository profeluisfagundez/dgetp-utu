#!/bin/bash

# Directorio principal
directorio_principal="$HOME/archivos"

# Crear directorio principal si no existe
mkdir -p "$directorio_principal"

# Crear directorios para cada lenguaje
mkdir -p "$directorio_principal"/{Java,VB.NET,SH,Python,Ruby}/{Pruebas,Resueltos,Ejemplos,Finales}

echo "Todos los directorios han sido creados correctamente."
