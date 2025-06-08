#!/bin/bash
BASE="mega_practico"
rm -f "$BASE/practicos/"practico{1..10}.txt
rm -f "$BASE/teoricos/"teorico{1..5}.odp
rmdir "$BASE/archivos/archivos_importantes"
rmdir "$BASE/archivos/archivos_no_importantes"
rmdir "$BASE/archivos"
rmdir "$BASE/practicos"
rmdir "$BASE/teoricos"
rmdir "$BASE"
if [[ ! -d "$BASE" ]]; then
    echo "El árbol de directorios se eliminó correctamente."
else
    echo "Hubo un problema eliminando los directorios."
fi
