<?php
require_once("LoginController.php");
$login = new LoginController();
$login->logInPage($_POST);

?>