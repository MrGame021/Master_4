<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php            
    include_once('conect.php');
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
    $result = $conect->query($sql);


    while($post = $result->fetch_assoc()){
        $nome_id = $post['id_user'];
        $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
        $result2 = $conect->query($sql);
        $autor = $result2->fetch_assoc();
    ?>

    
    <div class="post">
        <div class="title_x">
            <h2>titulo do post</h2>
        </div>

        <?php    
        if($post['id_user'] == $_SESSION['id']){
            echo('<a class="delet" href="post_delet.php?id='.$post['id'].'"> X </a>');
        }
        ?>

        <p>texto post</p>
        <img class="foto" src="usuarios/'.$autor['FOTO'].'">
        <small><?=$autor['NOME']?></small>
        <small><?=$post['data']?></small>

    </div>



<?php
}
?>

</body>
</html>

