<?php
    require_once("LoginController.php");
    if ($_POST['type'] == 'login') {
        LoginController::getInstance()->logInPage($_POST);
    }

    if($_POST['type'] == 'logout') {
        LoginController::getInstance()->logOut();
    }

?>