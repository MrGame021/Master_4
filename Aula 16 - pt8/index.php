<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['id'])){
        echo('<h1>Olá, '.$_SESSION['nome'].'</h1>');
    }
    else{
        header('Location: sist_login.php');
    }



    //echo($_SESSION['id'].'  |   |  '.$_SESSION['nome']);
    ?>
</body>
</html>