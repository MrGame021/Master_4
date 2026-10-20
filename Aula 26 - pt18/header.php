<?php
session_start();
include_once('conect.php');

if(!isset($_SESSION['id'])){
    header('Location: sist_login.php');
}
else{
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM usuarios WHERE ID = '$id'";
    $result = $conect->query($sql);
    $user = $result->fetch_assoc();
}
?>

<header>
    <div>
        <img class="foto" src="usuarios/<?=$usuario['foto']?>">
        <h2><?=$user['NOME']?></h2>
    </div>
    <div>
        <a href="index.php">Home</a>
        <a href="perfil.php?id=">Perfil</a>
        <a href="forum.php">Fórum</a>
        <a href="back_logout.php">Sair</a>
    </div>
</header>