<?php
include_once('conect.php');

#PEGANDO INFOS DO USER PELO ID
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE ID = '$id'";
$result = $conect->query($sql);
$user_2 = $result->fetch_assoc();

# DEFINIR GENERO
if($user_2['GENERO'] == 1){
    $g = 'Masculino';
}
else if($user_2['GENERO'] == 2){
    $g = 'Feminino';
}
else{
    $g = 'Outro / Prefiro não opinar';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user_2['NOME']?></title>
    <link rel="shortcut icon" href="usuarios/<?=$user_2['FOTO']?>" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include_once('header.php');
    ?>
    <main class='first'>
        <div class="">
            <img src="usuarios/<?=$user_2['FOTO']?>">
        </div>
        <div>
            <h1><?=$user_2['NOME']?></h1>
            <span><?=$user_2['DATA_NASC']?></span>
            <span><?=$g?></span>

        </div>
        <div>
        <?php
        # PEGAR TODOS OS POSTS DA PESSOA DO PERFIL:
        $id_autor = $user_2['ID'];
        include_once('conect.php');
        $sql = "SELECT * FROM posts WHERE id_user = '$id_autor' ORDER BY id DESC LIMIT 10";
        $result2 = $conect->query($sql);
        while($post = $result->fetch_assoc()){
            $nome_id = $post['id_user'];
            $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
            $result2 = $conect->query($sql);
            $autor = $result2->fetch_assoc();
        ?>    
            <div class="post">
                <div class="postheader">
                    <div>
                        <img class="foto" src="usuarios/<?=$autor['FOTO']?>">
                        <small><a href="profile.php?id=<?=$autor['ID']?>"><?=$autor['NOME']?></a></small>
                        <small> | </small>
                        <small><?=$post['data']?></small>
                    </div>
                </div>
                <?php    
                if($post['id_user'] == $_SESSION['id']){
                    echo('<a class="delet" href="post_delet.php?id='.$post['id'].'"> X </a>');
                }
                ?>
                <h2><?=$post['titulo']?></h2>
                <p><?=$post['texto']?></p>
            </div>
        <?php
        }
        ?>
        </div>
    </main>
    
</body>
</html>