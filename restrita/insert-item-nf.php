<?php
    include('../verifica_login.php');

    if(empty($_POST['idProduct']) || empty($_POST['nameProduct']) || empty($_POST['valueProduct']) || empty($_POST['amountProduct']) || empty($_POST['subtotal'])) {
        header ('location: page-insert-item-nf.php');
    }

    array_map(function($idProduct, $nameProduct, $valueProduct, $amountProduct, $subtotal) {
        include('../conecta.php');
        session_start();
        $nf = $_SESSION['nf'];

        $queryAttendant = "SELECT id FROM users WHERE email = '$_SESSION[email]'";
        $queryAttendant = $conexao->query($queryAttendant);
        $lineResult = $queryAttendant->fetch_assoc();
        $idAttendant = $lineResult['id'];
        $_SESSION['idAttendant'] = $idAttendant;

        $queryProduct = $conexao -> prepare(
            "INSERT INTO itemsnf (codNF, codProduct, codAttendants, amount, subtotal) VALUES
            ('$nf', '$idProduct', '$idAttendant', '$amountProduct', '$subtotal')
        ");

        $queryProduct -> execute();
        
    }, $_POST['idProduct'], $_POST['nameProduct'], $_POST['valueProduct'], $_POST['amountProduct'], $_POST['subtotal']);

    $_SESSION['validate-insert'] = true;
    header('location: page-confirm-item.php');