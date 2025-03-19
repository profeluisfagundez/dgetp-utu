#!/bin/bash
read -p "Ingrese el usuario del sistema" usuarioIngresado
usuario=/home/$usuarioIngresado
if [ -d $usuario ]; then
    mkdir -p /home/$USER/Documentos/seguridadInformatica
    echo "Se ha creado el directorio"
else
    echo "Ingrese un usuario valido"
fi

# -eq = igual 
# -ne = diferente
# -gt = mayor que
# -lt = menor que
# -ge = mayor o igual que

if [ $numeroUno -eq $numeroDos ]; then
    echo "Los numeros son iguales"
else
    echo "Los numeros son diferentes"
fi

for nombre in ana juan pedro; do
    echo "Hola $nombre"
done

for ((i=0; i<=10; i++)); do
    echo "El valor de i es $i"
done

while [ $numero -lt 10 ]; do
    echo "El valor de numero es $numero"
    numero=$((numero+1))
done