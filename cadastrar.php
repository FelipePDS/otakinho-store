<?php
    session_start();
    include('conecta.php');

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['passwordUser'])) { //se o campo de usuario tiver vazio...
        header('location: page-inscription2.php'); //se tiver tentativa de acesso nessa página sem o preenchimento do form (alguns casos até por url), então a pessoa é redirecionada para o cadastro novamente
        exit();
    }

    $name = mysqli_real_escape_string($conexao, trim($_POST['name']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $passwordUser = mysqli_real_escape_string($conexao, trim(md5($_POST['passwordUser'])));

    $query = "SELECT COUNT(*) AS total FROM users WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['user_existing'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['passwordUser'] = mysqli_real_escape_string($conexao, trim($_POST['passwordUser']));
        header('location: page-inscription2.php');
        exit;
    }

    $sql = "INSERT INTO users (name, email, passwordUser, date_inscription) VALUES ('$name', '$email', '$passwordUser', NOW())";

    if ($conexao -> query($sql) === true) {
        $_SESSION['status_inscription'] = true;
    }

    $conexao -> close();

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['passwordUser'] = $_POST['passwordUser'];

    $_SESSION['validate-user'] = true;
    $_SESSION['validate-sucess-login'] = true;
    header('location: sucess-inscription.php');
    exit;
?>