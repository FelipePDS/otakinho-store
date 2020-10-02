<?php
session_start();

if ((!$_SESSION['validate-sucess-login'])) { //se a session de usuario não existir, a pessoa é redirecionada para o index.php
    header('location: restrita/index.php');
    exit();
};

unset($_SESSION['validate-sucess-login']);