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
            include_once('forum.php');
            ?>
        </main>
    </div>
    <div class="profile">
        <a href="profile.php?id=<?=$_SESSION['id']?>">Profile</a>
    </div>
</body>
</html>