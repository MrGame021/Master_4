<?php
include_once('conect.php');

#PEGANDO INFOS DO USER PELO ID

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
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
        <aside>
            <img src="usuarios/<?=$user_2['FOTO']?>" alt="">
            <h1><?=$user_2['NOME']?></h1>
            <span><?=$user_2['DATA_NASC']?></span>
            <span><?=$g?></span>
        </aside>
        <main>
            <?php
            # PEGAR TODOS OS POSTS DA PESSOA DO PERFIL:
            $id_autor = $user_2['ID'];

            include_once('conect.php');
            $sql = "SELECT * FROM posts WHERE autor = 'id_autor' ORDER BY id DESC LIMIT 5";
            $result = $conect->query($sql);


            while($post = $result->fetch_assoc()){
                $nome_id = $post['id_user'];
                $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
                $result2 = $conect->query($sql);
                $autor = $result2->fetch_assoc();
            ?>
        </main>
    </main>
    
</body>
</html>