<?php
require_once("LoginController.php");
$login = new LoginController();
$login->userExists($_POST);