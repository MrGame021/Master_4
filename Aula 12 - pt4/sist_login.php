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

        <form action="back_login.php" method="post">
            <small>Nome de Usuário</small><input name="nome" type="text" placeholder=''>
            <small>Senha</small><input name="senha" type="password" placeholder=''>
            <small>Confirmar Senha</small><input name="senha_Conf" type="password" placeholder=''>
            <small>Data de Nascimento</small><input name="date" type="date" placeholder='Data de Nascimento'>
            <small>Email</small><input name="email" type="email" placeholder=''>
            <small>Gênero</small><select name="genero" id="genero">
                <option value="" disable selected></option>
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
                <option value="2">Prefiro não opinar</option>
            </select>

            <button>Cadastrar</button>
        </form>
    </div>

</body>
</html>