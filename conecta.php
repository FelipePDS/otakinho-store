<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "systemnf";

    $conexao = new MYSQLI("$host","$usuario","$senha","$banco");

    if ($conexao -> connect_error) { 
        echo "Erro de Conexão!";
    }
    else{
        //echo "CONECTADO AO BANCO DE DADOS";
    }
?>