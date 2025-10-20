<?php
session_start();
require_once("../models/TrabajadorModel.php");

class TrabajadorController {

    public function __construct() {
        if (!isset($_SESSION['trabajadores'])) {
            $_SESSION['trabajadores'] = [];
        }
    }

    public function agregarTrabajador(String $nombre, String $apellido, String $cedula): void {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                echo "Ya existe un trabajador con esa cédula.<br>";
                return;
            }
        }
        $nuevo = new TrabajadorModel($nombre, $apellido, $cedula);
        $_SESSION['trabajadores'][] = $nuevo;
        echo "Trabajador agregado correctamente.<br>";
    }

    public function verTrabajadores(): void {
        if (empty($_SESSION['trabajadores'])) {
            echo "No hay trabajadores registrados.<br>";
            return;
        }

        foreach ($_SESSION['trabajadores'] as $index => $trabajador) {
            echo "[" . $index . "] " . $trabajador . "<br>";
        }
    }

    public function modificarTrabajador(String $cedula, String $nuevoNombre, String $nuevoApellido): void {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                $trabajador->setNombre($nuevoNombre);
                $ref = new ReflectionClass($trabajador);
                if ($ref->hasMethod('setApellido')) {
                    $trabajador->setApellido($nuevoApellido);
                } else {
                    echo "Aviso: el modelo no permite modificar el apellido.<br>";
                }
                echo "Trabajador con cédula $cedula modificado.<br>";
                return;
            }
        }
        echo "No se encontró un trabajador con la cédula proporcionada.<br>";
    }

    public function eliminarTrabajador(String $cedula): void {
        foreach ($_SESSION['trabajadores'] as $index => $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                unset($_SESSION['trabajadores'][$index]);
                //Datos importantes, reindexar el arreglo es necesario para tener mejor control
                //De nuestra estructura de datos. array_values siempre es necesario
                $_SESSION['trabajadores'] = array_values($_SESSION['trabajadores']);
                echo "Trabajador eliminado correctamente.<br>";
                return;
            }
        }
        echo "No se encontró un trabajador con esa cédula.<br>";
    }

    public function limpiarTrabajadores(): void {
        unset($_SESSION['trabajadores']);
        $_SESSION['trabajadores'] = [];
        echo "Se ha limpiado la lista de trabajadores.<br>";
    }
}
?>
