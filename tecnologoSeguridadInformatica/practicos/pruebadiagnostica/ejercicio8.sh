#!/bin/bash
DESTINO="$HOME/copia_de_archivos"
mkdir -p "$DESTINO"
cp /etc/passwd /etc/hosts "$DESTINO"
# - Dueño (usuario): lectura, escritura y ejecución (chmod 700)
# - Grupo: solo lectura (chmod 740)
# - Otros: sin permisos
chmod 740 "$DESTINO/passwd" "$DESTINO/hosts"
echo "Archivos copiados en $DESTINO y permisos modificados correctamente."
