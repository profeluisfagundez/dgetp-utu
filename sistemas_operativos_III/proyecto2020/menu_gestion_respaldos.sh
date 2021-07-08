#!/bin/bash
opc=0
fecha=$(date +%Y%m%d-%H-%M-%S-backup_bd)

function menu() {
    echo "MENÚ DE GESTIÓN DE RESPALDOS"
    echo "1 - Realizar un respaldo completo"
    echo "2 - Respaldar la estructura de la Base de datos"
    echo "3 - Respaldar de manera remota"
    echo "4 - Restaurar base de datos"
    echo "5 - Realizar consulta personalizada"
    echo "6 - Salir"
}

function realizar_respaldo_completo(){
  echo "Ingrese el nombre de la base de datos"
  read nomb
  nombre=$(echo $nomb | tr '[:upper:]' '[:lower:]')
  echo "show databases" | mysql -u root -p > bd.sql
  existe=$(cat bd.sql | grep -c $nombre)
  if [ $existe -ge 1 ]
  then
    mysqldump --opt --events --routines --triggers --default-character-set=utf8 -u root -p $nombre > $nombre.sql
    tar -czvf $fecha.tar.gz $nombre.sql
    mv $fecha.tar.gz /root/respaldos/bd/completa/
    rm $nombre.sql
    rm bd.sql
  else
    echo "no existe la base de datos, presione enter para continuar.."
    read enter
    rm bd.sql
  fi
}

function realizar_respaldo_estructura(){
  echo "Ingrese el nombre de la base de datos"
  read nomb
  nombre=$(echo $nomb | tr '[:upper:]' '[:lower:]')
  echo "show databases" | mysql -u root -p > bd.sql
  existe=$(cat bd.sql | grep -c $nombre)
  if [ $existe -ge 1 ]
  then
    mmysqldump -v --opt --no-data --default-character-set=utf8 -u root -p $nombre > $nombre.sql
    tar -czvf $fecha.tar.gz $nombre.sql
    mv $fecha.tar.gz /root/respaldos/bd/estructura
    rm $nombre.sql
    rm bd.sql
  else
    echo "no existe la base de datos, presione enter para continuar.."
    read enter
    rm bd.sql
  fi
}

while [ $opc -ne 6 ]
    do
        menu
        echo "Ingrese una opción: "
        read opc
        case $opc in
            1) realizar_respaldo_completo ;;
            2) realizar_respaldo_estructura ;;
            3) echo "" ;;
            4) echo "" ;;
            5) echo "" ;;
            6) echo "Adios" ; break ;;
            *) echo "Opción no valida" ; read pausa ;;
        esac
    done
