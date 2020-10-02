<?php
    include('../verifica_login.php');
    include '../conecta.php';

    $dateNF = $_POST['dateNF'];
    
    $queryDateNF = $conexao -> prepare("
        INSERT INTO nf (dateNF) VALUES 
            ('$dateNF')
    ");
    $queryDateNF -> execute();

    header('Location: page-product-nf.php');
?>