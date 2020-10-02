<?php
session_start();
session_destroy(); //ela destrói tudo oq tem no array superglobal session, ou seja, todas as informações nela são apagadas...
//unset($_SESSSION['nomeDaIndiceNaSession']);   --> também podemos fazer dessa forma caso precise apagar uma apenas especifica
header('location: index.html');
exit();