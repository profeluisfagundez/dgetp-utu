#!/bin/bash

# Función para mostrar el menú
mostrar_menu() {
    echo "Selecciona una opción:"
    echo "1. Crear un usuario"
    echo "2. Verificar si un usuario existe"
    echo "3. Eliminar un usuario"
    echo "4. Salir"
}

# Función para crear un usuario
crear_usuario() {
    # Solicitar el nombre del usuario a agregar
    read -p "Ingrese el nombre del usuario a agregar: " nombre_usuario
    # Convertir el nombre del usuario a minúsculas
    nombre_usuario=$(echo "$nombre_usuario" | tr '[:upper:]' '[:lower:]')

    # Solicitar el nombre del grupo
    read -p "Ingrese el grupo al que se va a agregar el usuario: " grupo

    # Verificar si el usuario ya existe
    if id "$nombre_usuario" &>/dev/null; then
        echo "El usuario '$nombre_usuario' ya existe en el sistema."
        return
    fi

    # Verificar si el grupo existe
    if ! getent group "$grupo" &>/dev/null; then
        echo "El grupo '$grupo' no existe."
        return
    fi

    # Crear el usuario y agregarlo al grupo
    sudo useradd -m -G "$grupo" "$nombre_usuario"

    # Verificar si la creación fue exitosa
    if [ $? -eq 0 ]; then
        echo "El usuario '$nombre_usuario' ha sido creado y agregado al grupo '$grupo'."
    else
        echo "Hubo un error al crear el usuario '$nombre_usuario'."
    fi
}

# Función para verificar si un usuario existe
verificar_usuario() {
    read -p "Ingrese el nombre del usuario a verificar: " nombre_usuario
    # Convertir el nombre del usuario a minúsculas
    nombre_usuario=$(echo "$nombre_usuario" | tr '[:upper:]' '[:lower:]')

    if id "$nombre_usuario" &>/dev/null; then
        echo "El usuario '$nombre_usuario' existe en el sistema."
    else
        echo "El usuario '$nombre_usuario' no existe."
    fi
}

# Función para eliminar un usuario
eliminar_usuario() {
    read -p "Ingrese el nombre del usuario a eliminar: " nombre_usuario
    # Convertir el nombre del usuario a minúsculas
    nombre_usuario=$(echo "$nombre_usuario" | tr '[:upper:]' '[:lower:]')

    # Verificar si el usuario existe
    if id "$nombre_usuario" &>/dev/null; then
        # Eliminar el usuario
        sudo userdel -r "$nombre_usuario"
        if [ $? -eq 0 ]; then
            echo "El usuario '$nombre_usuario' ha sido eliminado."
        else
            echo "Hubo un error al eliminar el usuario '$nombre_usuario'."
        fi
    else
        echo "El usuario '$nombre_usuario' no existe."
    fi
}

# Bucle principal que muestra el menú
while true; do
    mostrar_menu
    read -p "Selecciona una opción: " opcion

    case $opcion in
        1)
            crear_usuario
            ;;
        2)
            verificar_usuario
            ;;
        3)
            eliminar_usuario
            ;;
        4)
            echo "Saliendo..."
            exit 0
            ;;
        *)
            echo "Opción inválida. Inténtalo de nuevo."
            ;;
    esac
done
