<?php
require_once("LoginController.php");
$login = new LoginController();
$login->logInApp($_POST);

?>