<?php
    include '../conecta.php';

    $queryLastProduct = "SELECT MAX(idProduct) as lastProduct FROM products";

    $resultQuery = $conexao -> query($queryLastProduct);

    $lastLineProduct = $resultQuery -> fetch_assoc();
    $lastIdProduct = $lastLineProduct['lastProduct'] + 1;

    $_SESSION['idProduct'] = $lastIdProduct;
?>