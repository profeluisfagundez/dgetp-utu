<?php
require_once("LoginController.php");
$login = new LoginController();
$login->initSystem($_POST);