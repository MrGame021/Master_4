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
        <h1>Cadastro</h1>

        <form action="back_cadastro.php" method="post">
            <small>Nome de Usuário</small><input name="nome" type="text" value="<?= $_SESSION['old']['nome'] ?? '' ?>">
            <small>Senha</small><input name="senha" type="password">
            <small>Confirmar Senha</small><input name="senha_Conf" type="password">
            <small>Data de Nascimento</small><input name="date" type="date" value="<?= $_SESSION['old']['date'] ?? '' ?>">
            <small>Email</small><input name="email" type="email" value="<?= $_SESSION['old']['email'] ?? '' ?>">
            <small>Gênero</small><select name="genero" id="genero">
                <option value="" disable selected></option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                <option value="3">Prefiro não opinar</option>
            </select>

            <button>Cadastrar</button>
        </form>
    </div>

    <?php
    if(isset($_SESSION['erros'])){
        echo($_SESSION['erros'][0]);
    }

    echo($_SESSION['aprov']);

    unset($_SESSION['erros'], $_SESSION['old']);
    ?>

</body>
</html>