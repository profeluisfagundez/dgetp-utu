<?php
    if ($_POST['type'] == 'login') {
        require_once("LoginController.php");
        LoginController::getInstance()->logInPage($_POST);
    }
?>