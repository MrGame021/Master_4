<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <div class="corpoP">
        <h1>Cadastro</h1>

        <form action="back_cadastro.php" method="post">
            <small>Email</small><input name="nome" type="text" value="<?= $_SESSION['old']['nome'] ?? '' ?>">
            <small>Senha</small><input name="senha" type="password">

            <button>Cadastrar</button>
        </form>

        <label>
            Ainda não tem uma conta? <a href="sist_cadastro.php">Cadastrar</a><br>
            <a href="">Esqueceu da senha?</a>
        </label>
    </div>

</body>
</html>