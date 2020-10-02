<?php
session_start();

if(!$_SESSION['validate-sucess-login']) {
    header('location: restrita/index.php');
    exit();
}

unset($_SESSION['validate-sucess-login']);