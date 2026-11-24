<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php            
    include_once('conect.php');
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 10";
    $result = $conect->query($sql);
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
    </main>
</body>
</html>