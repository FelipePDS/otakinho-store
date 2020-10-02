<?php
    include('../verifica_login.php');

    if(empty($_POST['name']) || empty($_POST['price'])) {
        header('location: page-add-product.php');
    }

    array_map(function($name, $price) {
        include('../conecta.php');
        $queryProducts = $conexao -> prepare("INSERT INTO products (name, price) VALUES
            ('$name', '$price')
        ");

        $queryProducts -> execute();

        header('location: index.php');
    }, $_POST['name'], $_POST['price']);