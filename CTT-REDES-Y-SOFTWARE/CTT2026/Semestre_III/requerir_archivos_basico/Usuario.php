<?php

// Clase Usuario para representar a un usuario con su nombre de usuario y contraseña.
// Una clase es una representación de un objeto de la realidad.
class Usuario
{
    // Atributos privados para almacenar el nombre de usuario y la contraseña
    private $username;
    private $password;

    //Constructor de la clase, se ejecuta automáticamente al crear un objeto de la clase. Sirve para inicializar los atributos de la clase.
    public function __construct($usernameU, $passwordU)
    {
        $this->username = $usernameU;
        $this->password = $passwordU;
    }

    //Obtener el valor del atributo
    public function getUsername(): String
    {
        return $this->username;
    }

    // Fijar un valor al atributo
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getPassword(): String
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    //Métodos magicos: métodos que vienen en php por defecto, pero se pueden modificar para que hagan lo que nosotros queramos.  
    public function __toString(): String
    {
        return "Usuario: " . $this->username . ", Contraseña: " . $this->password;
    }
}
