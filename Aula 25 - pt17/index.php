<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a id="out" href="back_logout.php">
        <div class="logout">
        <?php
            session_start();
            include_once('conect.php');
            if(!isset($_SESSION['id'])){
                header('Location: sist_login.php');        
            }
            else{
                echo('<h1>Desconectar</h1>');
            }
            ?>
        </div>
    </a>
    <div class="corpoP">
        <h1>Criar Postagem</h1>
        <form action="back_post.php" method="post">
            <small>Título</small><input name="titulo" type="text">
            <small>Texto</small><textarea name='text'></textarea>    
            <button type='submit'>Postar</button>
        </form>
        <main id='teste'>
            <?php            
            include_once('conect.php');
            $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
            $result = $conect->query($sql);
            while($post = $result->fetch_assoc()){
                $nome_id = $post['id_user'];
                $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
                $result2 = $conect->query($sql);
                $autor = $result2->fetch_assoc();
                echo('<div class="post">');
                echo('<div class="title_x">');
                if($post['id_user'] == $_SESSION['id']){
                    echo('<a class="delet" href="post_delet.php?id='.$post['id'].'"> X </a>');
                }
                echo('<h2>'.$post['titulo'].'</h2>');

                echo('</div>');
                echo('<p>'.$post['texto'].'</p>');
                echo('<img class="foto" src="usuarios/'.$autor['FOTO'].'">');
                echo('<small>Autor: '.$autor['NOME'].'</small>');
                echo('<small>Data: '.$post['data'].'</small>');
                echo('</div>');
            }
            ?>
        </main>
    </div>
    <div class="profile">
        <h1>Perfil:</h1>
    </div>
</body>
</html>