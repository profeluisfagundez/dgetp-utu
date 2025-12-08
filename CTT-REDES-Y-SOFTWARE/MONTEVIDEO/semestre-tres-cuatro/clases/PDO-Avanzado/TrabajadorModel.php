<?php

class TrabajadorModel {

  private string $ci;
  private string $nombre;
  private string $apellido;
  private string $direccion;
  private string $email;
  private string $celular;

  public function __construct(string $ci, string $nombre, string $apellido, string $direccion, string $email, string $celular) {
    $this->ci = $ci;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->direccion = $direccion;
    $this->email = $email;
    $this->celular = $celular;
  }

  // Getters
  public function getCi(): string {
    return $this->ci;
  }

  public function getNombre(): string {
    return $this->nombre;
  }

  public function getApellido(): string {
    return $this->apellido;
  }

  public function getDireccion(): string {
    return $this->direccion;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getCelular(): string {
    return $this->celular;
  }

  // Setters
  public function setCi(string $ci): void {
    $this->ci = $ci;
  }

  public function setNombre(string $nombre): void {
    $this->nombre = $nombre;
  }

  public function setApellido(string $apellido): void {
    $this->apellido = $apellido;
  }

  public function setDireccion(string $direccion): void {
    $this->direccion = $direccion;
  }

  public function setEmail(string $email): void {
    $this->email = $email;
  }

  public function setCelular(string $celular): void {
    $this->celular = $celular;
  }
}
