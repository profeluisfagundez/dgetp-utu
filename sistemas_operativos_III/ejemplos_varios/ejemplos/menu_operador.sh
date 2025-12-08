#Ejemplo de menú para scripts básicos que usa las siguientes estructuras:
#while, case, funciones
opc=0

function menu_principal(){
    echo "SISTEMA DE GESTIÓN DE USUARIOS Y GRUPOS"
    echo "Opción 1 - Menú de usuarios"
    echo "Opción 2 - Menú de grupos"
    echo "Opción 3 - Salir"
}

function usuarios() {
    echo "Opción 1 - Agregar usuario "
    echo "Opción 2 - Buscar usuario "
    echo "Opción 3 - Listar usuario "
    echo "Opción 4 - Modificar usuario "
    echo "Opción 5 - Borrar usuario "
    echo "Seleccione una opción: "
}

function grupos(){
    echo "Opción 1 - Agregar grupo "
    echo "Opción 2 - Buscar grupo "
    echo "Opción 3 - Listar grupos "
    echo "Opción 4 - Borrar grupo "
    echo "Seleccione una opción: "
}

while [ $opc -ne 3 ]
  do
        clear
        menu_principal
        read var_menu
        case $var_menu in
            1)
                clear
                usuarios
                read opc_usuario
                case $opc_usuario in
                    1) clear ; echo "agregar usuario" ; read a ;;
                    2) clear ; echo "buscar usuarios" ; read a ;;
                    3) clear ; echo "listar usuario" ; read a ;;
                    4) clear ; echo "modificar usuario" ; read a ;;
                    5) clear ; echo "borrar usuario" ; read a ;;
                    *) clear ; echo "Opción incorrecta, presione enter para continuar.."; read a ;;
                esac
            ;;
            2)
              clear
              grupos
              read opc_grupos
              case $opc_grupos in
                1) clear ; echo "AGREGAR GRUPO AL SISTEMA" ; read a ;;
                2) clear ; echo "BUSCAR UN GRUPO EN EL SISTEMA" ; read a ;;
                3) clear ; echo "LISTAR LOS GRUPOS DEL SISTEMA" ; read a ;;
                4) clear ; echo "BORRAR GRUPO DEL SISTEMA" ; read a ;;
                *) clear ; echo "Opción incorrecta, presione enter para continuar.."; read a ;;
              esac
            ;;
            3) echo "Hasta la próxima" ; break ;;
            *) echo "Opción incorrecta, presione enter para continuar.."; read a ;;
        esac
  done
