<?php
session_start();
//conectando ao banco de dados
include_once('conect.php');

//recebendo dados de login
$email = $_POST['email'];
$senha = $_POST['senha'];

//vendo se o email ja existe no banco, ou seja, vendo se ja existe o usuario
$sql = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
$result = $conect->query($sql);


//vendo senha do email

if($result->num_rows > 0){
    $usuario = $result->fetch_assoc();
    if(password_verify($senha, $usuario['SENHA'])){
        // id do usuario
        $sql = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
        $result = $conect->query($sql);
        $usuario = $result->fetch_assoc();
        $_SESSION['id'] = $usuario['ID'];
        // nome do user
        $_SESSION['nome'] = $usuario['NOME'];
        header('Location: index.php');
    }
    else{
        $_SESSION['erro'] = 'Senha incorreta';
        header('Location: sist_login.php');
    }
}
else{
    $_SESSION['erro'] = 'Usuário incorreto';
    header('Location: sist_login.php');
}



?>