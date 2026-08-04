<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="logout">
    <?php
        session_start();

        $conect = new mysqli('localhost', 'root', '', 'usuarios');
        if(!isset($_SESSION['id'])){
            header('Location: sist_login.php');        
        }
        else{
            echo('<h1><a id="out" href="back_logout.php">Desconectar</a></h1>');
        }

        ?>
    </div>

    <div class="corpoP">

        <h1>Criar Postagem</h1>
        <form action="back_post.php" method="post">
            <small>Título</small><input name="titulo" type="text">
            <small>Texto</small><textarea name='text'></textarea>    

            <button type='submit'>Postar</button>
        </form>

        <main>
            <?php            
            $conect = new mysqli('localhost', 'root', '', 'usuarios');
            $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
            
            $result = $conect->query($sql);

            while($post = $result->fetch_assoc()){
                $nome_id = $post['id_user'];
                $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
                $result2 = $conect->query($sql);
                $autor = $result2->fetch_assoc();

                echo('<div class="post">');
                echo('<h2>'.$post['titulo'].'</h2>');
                echo('<p>'.$post['texto'].'</p>');
                echo('<small>Autor: '.$autor['NOME'].'</small>');
                echo('<small>Data: '.$post['data'].'</small>');
                echo('</div>');
            }
            ?>
        </main>
    </div>
</body>
</html>