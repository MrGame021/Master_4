<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="corpoP">
        <?php

        $conect = new mysqli('localhost', 'root', '', 'usuarios');
        if(!isset($_SESSION['id'])){
            header('Location: sist_login.php');        
        }
        else{
            echo('<a id="out" href="back_logout.php">Desconectar</a>');
        }

        ?>


        <h1>Criar Postagem</h1>
        <form action="back_post.php" method="post">
            <small>Título</small><input name="titulo" type="text">
            <small>Texto</small><textarea name='text'></textarea>    

            <button type='submit'>Postar</button>
        </form>
    </div>


</body>
</html>