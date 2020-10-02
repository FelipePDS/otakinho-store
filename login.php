<?php
session_start(); //começa a function da session, para pegar os valores que estão nela ou mandar para outra página (nesse caso está mandando para o painel/verifica_login)

include('conecta.php');

if (empty($_POST['email']) || empty($_POST['passwordUser'])) { //se o campo de usuario tiver vazio...
    $_SESSION['EMPTY'] = true;
    header('location: page-login2.php'); //se tiver tentativa de acesso nessa página sem o preenchimento do form (alguns casos até por url), então a pessoa é redirecionada para o index novamente
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']); //pegar o valor de onde o email preencheu no form, e colocando uma function que protege contra sql injection
$passwordUser = mysqli_real_escape_string($conexao, $_POST['passwordUser']);

$query = "SELECT name, id FROM users WHERE email = '{$email}' AND passwordUser = md5('{$passwordUser}')";

$result = mysqli_query($conexao, $query); //ele faz a relação dos valores daqui, com os do bd através do object $conexao que vem do conecta.php
$row = mysqli_num_rows($result); //verifica se o valor digitado pela pessoa tem no banco de dados, se tiver, o valor retornado é 1, se não tiver o valor retornado é 0

if ($row == 1) { //faz a condição através das informações acima
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $usuario_bd['name'];
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $usuario_bd['id'];
    $_SESSION['validate-user'] = true;
    $_SESSION['validate-sucess-login'] = true;
    header("location: sucess-login.php");
} else {
    $_SESSION['user-inexistent'] = true;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['passwordUser'] = $_POST['passwordUser'];
    header('location: page-login2.php');
    exit();
}