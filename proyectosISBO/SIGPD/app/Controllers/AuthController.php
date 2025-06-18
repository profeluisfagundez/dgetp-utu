<?php

class AuthController {
  public function showLoginForm() {
    require_once __DIR__ . '../../Views/Auth/login.php';
  }
}
