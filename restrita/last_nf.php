<?php
    include '../conecta.php';

    $queryLastNF = "SELECT MAX(nf) as lastNF FROM nf";

    $resultQuery = $conexao -> query($queryLastNF);

    $lastLineNF = $resultQuery -> fetch_assoc();
    $lastNF = $lastLineNF['lastNF'];

    $_SESSION['nf'] = $lastNF;
    $_SESSION['validate-date'] = true;
?>