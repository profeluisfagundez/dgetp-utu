########################################
# 1
########################################
cd /home/dramon
ls
ls -la
mkdir scripts archivos otros
cd otros
touch archivo_{1..1000}
mkdir dir_{1..1000}
mv archivo_* ../archivos/

########################################
# 2
########################################
mkdir -p practica/{a/b/c,d/e/f}
tree practica
########################################
# 3
########################################
#!/bin/bash
clear
cal
sleep 10
echo "Usuario: $USER"
echo "Home: $HOME"
date +"%Y-%m-%d-%H-%M-%S"
clear
########################################
# 4
########################################
#!/bin/bash
cat /etc/passwd
sleep 10
read -p "Desea copiar el archivo? (s/n): " op
if [ "$op" == "s" ]; then
    cp /etc/passwd $HOME/
elif [ "$op" == "n" ]; then
    echo "No se crea una copia"
else
    echo "Opcion incorrecta"
fi

chmod +x script2.sh
########################################
# 5
########################################
#!/bin/bash
rm -f practica/*/*/*
rmdir practica/a/b/c
rmdir practica/a/b
rmdir practica/a
rmdir practica/d/e/f
rmdir practica/d/e
rmdir practica/d
rmdir practica

chmod +x borrar.sh
########################################
# 6
########################################
#!/bin/bash
for nombre in "$@"
do
    if [ "$nombre" == "$USER" ]; then
        echo "Coincide con usuario logueado"
    fi
done

chmod +x script6.sh
########################################
# 7
########################################
#!/bin/bash
for nombre in "$@"
do
    echo "$nombre" | tr 'A-Z' 'a-z'
    sleep 2
done
chmod +x script7.sh
########################################
# 8
########################################
mkdir -p ~/copia_de_archivos
cp /etc/passwd /etc/hosts ~/copia_de_archivos/
chmod 640 ~/copia_de_archivos/*
########################################
# 9
########################################
#!/bin/bash
read -p "Ingrese numero: " num
if [ $num -lt 12 ]; then
    clear
    echo "Número menor a 12"
else
    clear
    echo "Número mayor a 12"
fi
echo "$num $USER $(date +%H:%M:%S)"

chmod +x script9.sh
########################################
# 10
########################################
#!/bin/bash
dir=~/archivos
mkdir -p $dir
for lang in Java VB.NET SH Python Ruby
do
    mkdir -p $dir/$lang {Pruebas,Resueltos,Ejemplos,Finales}
done

chmod +x script10.sh
########################################
