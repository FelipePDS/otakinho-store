<?php
session_start();

if ((!$_SESSION['validate-user'])) { //se a session de usuario não existir, a pessoa é redirecionada para o index.php
    header('location: ../index.html');
    exit();
};