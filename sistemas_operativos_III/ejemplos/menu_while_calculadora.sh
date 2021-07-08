#Ejemplo de menú para scripts básicos que usa las siguientes estructuras:
#while, case, funciones
opc=0

function menu() {
    echo "Opción 1 - Suma "
    echo "Opción 2 - Resta "
    echo "Opción 3 - Multiplicación "
    echo "Opción 4 - División"
    echo "Opción 5 - Salir "
    echo "Seleccione una opción: "
}

function fun_suma(){
    clear
    echo "Ingrese primer valor: "
    read val_uno
    echo "Ingrese segundo valor: "
    read val_dos
    #IMPORTANTE, respestar los espacios en blanco
    let resultado=$val_uno+$val_dos
    echo "El resultado es: $resultado"
    echo "Presione una tecla para continuar.."
    read a
}

fun_resta(){
    clear
    echo "Ingrese primer valor: "
    read val_uno
    echo "Ingrese segundo valor: "
    read val_dos
    #IMPORTANTE, respestar los espacios en blanco
    let resultado=$val_uno-$val_dos
    echo "El resultado es: $resultado"
    echo "Presione una tecla para continuar.."
    read a
}

fun_multi(){
    clear
    echo "Ingrese primer valor: "
    read val_uno
    echo "Ingrese segundo valor: "
    read val_dos
    #IMPORTANTE, respestar los espacios en blanco
    let resultado=$val_uno*$val_dos
    echo "El resultado es: $resultado"
    echo "Presione una tecla para continuar.."
    read a
}

fun_divi(){
    clear
    echo "Ingrese primer valor: "
    read val_uno
    echo "Ingrese segundo valor: "
    read val_dos
    #IMPORTANTE, respestar los espacios en blanco
    let resultado=$val_uno/$val_dos
    echo "El resultado es: $resultado"
    echo "Presione una enter para continuar.."
    read a
}

while [ $opc -ne 5 ]
    do
        clear
        menu
        read var_menu
        case $var_menu in
            1) fun_suma ;;
            2) fun_resta ;;
            3) fun_multi ;;
            4) fun_divi ;;
            5) echo "Hasta la próxima" ; break ;;
            *) echo "Opción incorrecta, presione enter para continuar.."; read a ;;
        esac
    done
