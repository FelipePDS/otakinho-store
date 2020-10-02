<?php
    include('../verifica_login.php');
    include('../conecta.php');

    if(!$_SESSION['validate-confirm-item']) {
        header('location: page-confirm-item.php');
    }

    $nf = $_SESSION['nf'];
    $total = $_SESSION['total'];

    $queryNF = $conexao -> prepare("UPDATE nf SET valueTotal = '$total' WHERE nf = '$nf'");

    $queryNF -> execute();

    header('location: logout-nf.php');