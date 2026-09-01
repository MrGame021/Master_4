<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="corpoP">
        <h1>Login</h1>

        <form action="back_login.php" method="post">
            <small>Email</small><input name="email" type="text" value="<?= $_SESSION['old']['nome'] ?? '' ?>">
            <small>Senha</small><input name="senha" type="password">

            <button>Login</button>
        </form>

        <label>
            Ainda não tem uma conta? <a href="sist_cadastro.php">Cadastrar</a><br>
            <a href="">Esqueceu da senha?</a>
        </label>
    </div>
    <?php
    if(isset($_SESSION['erro'])){
        echo('<p class="erros">'.$_SESSION['erro'].'</p>');
        unset($_SESSION['erro']);
    }
    ?>
</body>
</html>