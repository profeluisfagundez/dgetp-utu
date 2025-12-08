#!/bin/bash

crear_directorio() {
  read -p "Ingrese el nombre del directorio: " dir_name
  mkdir ~/"$dir_name"
  echo "Directorio '$dir_name' creado en la home del usuario."
}

crear_archivo() {
  read -p "Ingrese el nombre del archivo: " file_name
  touch ~/"$file_name"
  echo "Archivo '$file_name' creado en la home del usuario."
}

saludar_usuario() {
  echo "¡Hola, $(whoami)! ¿Cómo estás hoy?"
}

buscar_en_archivo() {
  read -p "Ingrese el nombre del archivo: " file_name
  read -p "Ingrese el texto a buscar: " search_text
  if [[ -f ~/"$file_name" ]]; then
    grep "$search_text" ~/"$file_name"
  else
    echo "El archivo '$file_name' no existe en la home."
  fi
}

buscar_archivo() {
  read -p "Ingrese el nombre del archivo a buscar: " file_name
  if [[ -e ~/"$file_name" ]]; then
    echo "El archivo '$file_name' existe en la home."
  else
    echo "El archivo '$file_name' no existe en la home."
  fi
}

listar_archivos_directorios() {
  ls -l ~/
}

ver_lista_anterior() {
  if [[ -f ~/lista_archivos.txt ]]; then
    cat ~/lista_archivos.txt
  else
    echo "No se ha generado una lista de archivos anterior."
  fi
}

while true; do
  echo "Seleccione una opción:"
  echo "a. Crear un directorio en la home del usuario"
  echo "b. Crear un archivo en la home del usuario"
  echo "c. Saludar al usuario"
  echo "d. Buscar información en un archivo de la home"
  echo "e. Buscar un archivo en la home del usuario"
  echo "f. Generar una lista de todos los archivos y directorios de la home del usuario"
  echo "g. Ver la lista anterior de archivos y directorios"
  echo "h. Salir"

  read -p "Ingrese su opción: " opcion

  case $opcion in
    a) crear_directorio ;;
    b) crear_archivo ;;
    c) saludar_usuario ;;
    d) buscar_en_archivo ;;
    e) buscar_archivo ;;
    f) 
      listar_archivos_directorios
      ls -l ~/ > ~/lista_archivos.txt
      echo "Lista generada y guardada en 'lista_archivos.txt'."
      ;;
    g) ver_lista_anterior ;;
    h) 
      echo "Saliendo del programa..."
      exit 0
      ;;
    *)
      echo "Opción no válida. Por favor, ingrese una opción válida."
      ;;
  esac
done
