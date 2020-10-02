<?php
include('verifica_login.php');
?>
<h2>ID de usuário: <?php echo $_SESSION['id']; ?></h2><br>
<h2>Olá, <?php echo $_SESSION['name']; ?></h2><br><br>
<h2><a href="logout.php">SAIR</a></h2>