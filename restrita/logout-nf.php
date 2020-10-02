<?php
    include('../verifica_login.php');

    unset($_SESSION['nf']); //ele vai desmanchar essa seção para não ficar mais válida e na próxima compra ele adicionr um outro nf

    header('location: page-sucess-nf.php');