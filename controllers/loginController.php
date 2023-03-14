<?php
require_once '../models/database.php';
require_once '../models/usersModel.php';
require_once '../config.php';

session_start();
if (isset($_SESSION['user'])) {
    header('Location: /accueil');
    exit;
}

$formErrors = [];

if (count($_POST) > 0) {
    $user = new users;

    if (!empty($_POST['username'])) {
        $user->username = $_POST['username'];
        if ($user->checkIfUserExists('username') > 0) {
            $password = $user->getPassword();
        } else {
            $formErrors['lastname'] = USER_LOGIN_ERROR;
        }
    } else {
        $formErrors['lastname'] = USER_USERNAME_ERROR_EMPTY;
    }

    if (!empty($_POST['password'])) {
        if (isset($password)) {
            if (password_verify($_POST['password'], $password)) {
                $_SESSION['user'] = $user->getIds();
                header('Location: /accueil');
                exit;
            } else {
                $formErrors['password'] = USER_LOGIN_ERROR;
            }
        }
    } else {
        $formErrors['password'] = '';
    }
}

require_once '../views/parts/header.php';
require_once '../views/login.php';
require_once '../views/parts/footer.php';