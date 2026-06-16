<?php

//recebendo dados de login
$email = $_POST['email'];
$senha = $_POST['senha'];

//conectando ao banco de dados
$conect = new mysqli('localhost', 'root', '', 'usuarios');

//vendo se o email ja existe no banco, ou seja, vendo se ja existe o usuario
$sql = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
$result = $conect->query($sql);

if($result->num_rows > 0){
    $usuario = $result->fetch_assoc();
    if($senha == $usuario['SENHA']){
        echo('Login realizado com sucesso!');
    }
    else{
        echo('Senha incorreta');
    }
}
else{
    echo('Esse email não existe');
}

//vendo senha do email


?>