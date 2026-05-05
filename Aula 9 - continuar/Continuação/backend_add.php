<?php


//conexao com o banco
$conect = new mysqli('localhost', 'root', '', 'aula6');

// coleta de info
$nome = @$_POST['nome'];
$idade = @$_POST['idade'];
$cidade = @$_POST['cidade'];

// Construindo comando em sql
$sql = "INSERT INTO pessoas (nome, idade, cidade) VALUES ('$nome', '$idade', '$cidade')";
//executa 
$conect->query($sql);

// voltar ao forms instantaneamente
header('Location: pessoas.php')
?>